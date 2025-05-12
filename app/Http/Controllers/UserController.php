<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    private $rules = [
        'dni' =>'required',
        'password'=>'required'
    ];
    private $message =[
        'dni.required' => ['status'=>false,'message'=>'Por ingrese Usuario'],
        'password.required' => ['status'=>false,'message'=>'Por ingrese su Contraseña'],
       
    ];
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),$this->rules,$this->message);
        if($validate->fails()) {
            $response = $validate->errors();
            return response()->json($response);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
