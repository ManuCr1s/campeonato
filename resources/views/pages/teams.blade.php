@extends('template.template')
@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
 <link href="{{asset('assets/css/jquery.dataTables.css')}}" rel="stylesheet"/>
@endsection
@section('container')
<div class="wrapper">
    <x-navs.main/>
    <div class="main-panel">
        <x-navs.top/>
        <div class="content">
            <div class="container-fluid">
            <div class="row">
                        <div class="col-md-4">
                            <div class="card stacked-form">
                             
                                <div id="register_team">
                                        <div class="card-header ">
                                            <h4 class="card-title">Ingrese Equipo</h4>
                                        </div>
                                        <div class="card-body">
                                            <form id="registerTeams">
                                                <div class="form-group">
                                                    <label>Nombre de Equipo</label>
                                                    <input type="text" placeholder="Ingrese Nombre" class="form-control" name="team">
                                                    <input type="text" class="d-none" name="dni" value="{{Auth::user()->dni}}">
                                                </div>                
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-fill btn-warning">Registar Nombre</button>
                                        </div>
                                            </form>  
                                </div>
                             
                                <div id="registered_team">
                                        <div class="card-body"> 
                                              <h4 class="card-title d-flex justify-content-center">Equipo Registrado</h4>                 
                                        </div>
                                        <hr>
                                        <div class="card-footer py-2 px-3">
                                            <div class="d-flex justify-content-center">El nombre de su equipo ya se encuentra registrado, por favor vea la tabla.</div>
                                        </div>
                                </div>
                           
                            </div>
                        </div>     
                         <div class="col-md-8">
                                  <div class="card table-with-links">
                                <div class="card-header ">
                                    <h4 class="card-title">Nombre de Equipo Registrdo</h4>
                                    <p class="card-category">Puede editar el nombre de su equipo si ya lo registro</p>
                                </div>
                                <div class="card-body table-full-width">
                                    <div class="table-responsive">
                                        <table class="table" id="tableTeam">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Nombre de equipo</th>
                                                    <th class="text-center">Gerencia</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                        
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </div>
            </div>
        </div>
    </div>
</div>
<x-modals.teams/>
@endsection
@section('footer')
    <script src="{{asset('assets/js/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/jquery.datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts/teams.js')}}" type="module"></script>
@endsection