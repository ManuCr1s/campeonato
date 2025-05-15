<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $token = 'apis-token-5761.59ZzjNAOFWADmBfvLbj8DvX98Yv1FDPH';
    public function index()
    {
        return view('pages.login');
    }
    public function main()
    {
        return view('pages.dashboard');
    }
    public function player()
    {
        return view('pages.players');
    }
    public function team()
    {
        return view('pages.teams');
    }
    public function register()
    {
        return view('pages.register');
    }
    public function create()
    {
        //
    }
    private $rules = [
        'email' =>'required',
        'password'=>'required'
    ];
    private $message =[
        'email.required' => ['status'=>false,'message'=>'Por ingrese Usuario'],
        'password.required' => ['status'=>false,'message'=>'Por ingrese su Contraseña'],
       
    ];
    /**
     * Store a newly created resource in storage.
     */
    public function auth(Request $request){
        $validate = Validator::make($request->all(),$this->rules,$this->message);
        $credenciales = [
            'dni' => $request->input('user'),
            'password' => $request->input('pass')
        ];
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            return response()->json([
                    'status' => true,
                    'route' => '/dashboard'
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => "Por favor ingrese credenciales correctas"
        ]);
    }
    public function store(UserRequest $request)
    {
        try {
            $person = User::create([
                'dni' => $request->input('dni'),
                'name'=> $request->input('firtsname'),
                'lastname'=> $request->input('lastname'),
                'password' => Hash::make($request->input('password')),
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => "Por favor comuniquese con el administrador"
            ]);
        }
        return response()->json([
            'status' => true,
            'message' => "Se ingresó correctamente el usuario"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    public function dni(Request $request){
        $register = User::where('dni', $request->input('dni'))->exists();
        if($register){
            return response()->json([
                'status' => false,
                'message' => "Ya se ingreso otro delegado con ese DNI"
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
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
