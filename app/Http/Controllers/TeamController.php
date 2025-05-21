<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $teams = Team::create([
                'name' => $request->input('team'),
                'id_users' => $request->input('dni')
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => "Por favor comuniquese con el administrador"
            ]);
        }
        return response()->json([
            'status' => true,
            'message' => "Se ingresó correctamente el nombre del Equipo"
        ]);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $teams = Team::where('id_users',$request->input('dni'))->first();
            if($teams){
                    $teams = Team::join('users as u1', 'teams.id_users', '=', 'u1.dni')
                    ->join('offices', 'u1.id_office', '=', 'offices.id')
                    ->select('teams.id as id_team','teams.name as team_name', 'offices.name as office_name')
                    ->where('teams.id_users', '=', $request->input('dni'))
                    ->get();
                    return datatables()->of($teams)->toJson();
            }else{
                    return response()->json([ 
                            'status' => false,
                    ]);
            }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
    public function update(Request $request)
    {
        try {
            $team = Team::find($request->input('idTeam'));
            $team->name = $request->input('nameTeam');
            $team->save();
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => "Por favor comuniquese con el administrador"
            ]); 
        }
        return response()->json([
            'status' => true,
            'message' => "Se cambio correctamente el nombre del equipo"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
