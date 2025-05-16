@extends('template.template')
@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                                            <form id="teams">
                                                <div class="form-group">
                                                    <label>Nombre de Equipo</label>
                                                    <input type="text" placeholder="Ingrese Nombre" class="form-control" name="team">
                                                </div>                
                                        </div>
                                        <div class="card-footer ">
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
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Nombre de equipo</th>
                                                <th>Gerencia</th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Andrew Mike</td>
                                                <td>Develop</td>
                                                <td class="td-actions text-right">
                                            
                                                    <a href="#" rel="tooltip" title="Edit Profile" class="btn btn-success btn-link btn-xs">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                
                                                </td>
                                            </tr>
                                         
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
@endsection
@section('footer')
    <script src="{{asset('assets/js/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts/teams.js')}}" type="module"></script>
@endsection