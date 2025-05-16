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
        return $request->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $teams = Team::where('id_users',$request->input('dni'))->first();
            if($teams){
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
