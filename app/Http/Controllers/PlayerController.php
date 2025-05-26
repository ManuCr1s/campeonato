<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;
use App\Http\Requests\PlayerRequest;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $token = 'apis-token-5761.59ZzjNAOFWADmBfvLbj8DvX98Yv1FDPH';
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function player(Request $request){
            $player =  Player::where('status',true)->where('id_users', '=', $request->input('dni'))->count();
            if($player > 0){
                    $player = Player::join('contracts as ct', 'players.id_contracts', '=', 'ct.id')
                    ->select('players.photo as player_photo','players.dni as player_dni','players.name as player_name','players.lastname as player_lastname','players.born as player_born','ct.name as legacy')
                    ->where('players.status', '=',true)
                    ->where('players.id_users', '=', $request->input('dni'))
                    ->get();
                    return datatables()->of($player)->toJson();
            }else{
                return response()->json([ 
                        'status' => false,
                ]);
            }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerRequest $request)
    {
       
            try {
                $person = Player::create([
                    'dni' => $request->input('dni'),
                    'name'=> $request->input('firtsname'),
                    'lastname'=> $request->input('lastname'),
                    'id_offices'=> $request->input('office'),
                    'id_users'=> $request->input('user'),
                    'born'=> $request->input('born'),
                    'id_teams'=> $request->input('team'),
                    'id_contracts'=> $request->input('legacy'),
                ]);
            } catch (\Throwable $th) { 
                return response()->json([
                    'status' => false,
                    'message' => "Por favor comuniquese con el administrador"
                ]);
            }
            return response()->json([                                                                                                                                                                          
                'status' => true,
                'message' => "Se ingresó correctamente el jugador"
            ]);
        
     
    }
     public function dni(Request $request)
    {
            $register = Player::where('dni', $request->input('dni'))->exists();
            if($register){
                return response()->json([
                    'status' => false,
                    'message' => "Ya se ingreso otro jugador con ese DNI"
                ]);
            }else{
                $curl = curl_init();
                // Buscar dni
                curl_setopt_array($curl, array(
                // para user api versión 2
                CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $request->input('dni'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 2,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Referer: https://apis.net.pe/consulta-dni-api',
                    'Authorization: Bearer ' . $this->token
                ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $person = json_decode($response);       
                if($person == null){
                    $person = array('status'=>false,'message'=>'Por favor verifique su conexion a internet');
                }else if(property_exists($person,'nombres')){
                    $person->status = true;
                }else if($person->message == 'dni no valido'){
                    $person->status = true;
                    $person->apellidoPaterno = '';
                    $person->apellidoMaterno = '';
                    $person->message = 'Por favor verifique su DNI y registre su nombre y apellido';
                }else if($person->message == 'not found'){
                    $person->status = true;
                    $person->apellidoPaterno = '';
                    $person->apellidoMaterno = '';
                    $person->message = 'Por favor ingrese sus nombres y apellidos';
                }
                return response()->json($person);
            }
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
            $teams = Team::where('id_users',$request->input('dni'))->first();
            if($teams){
                    $teams = Team::join('users as u1', 'teams.id_users', '=', 'u1.dni')
                    ->join('offices', 'u1.id_office', '=', 'offices.id')
                    ->select('teams.name as team_name','teams.id as team_id','teams.id_users as team_user')
                    ->where('teams.id_users', '=', $request->input('dni'))
                    ->get();
                    return $teams;
            }else{
                    return response()->json([ 
                            'status' => false,
                            'message' => 'Lo siento, primero registre el nombre de su equipo'
                    ]);
            }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
