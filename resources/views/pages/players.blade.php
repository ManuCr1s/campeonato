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
                        <div class="col-md-12">
                            <div class="card table-big-boy">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="title">
                                        <h4 class="card-title">Tabla de Jugadores Inscritos</h4>
                                        <p class="card-category">Ingrese o elimine jugadores</p>
                                    </div>
                                    <input type="text" class="d-none" name="dni" value="{{Auth::user()->dni}}">
                                    <button type="button" class="btn btn-warning btn-wd" data-toggle="modal" data-target="#exampleModal">
                                            Ingrese Jugador
                                    </button>
                                    <x-modals.player/>
                                </div>
                                <div class="card-body table-full-width">
                                    <table class="table table-bigboy" id="tablePlayer">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Foto</th>
                                                <th class="text-center">Dni</th>
                                                <th class="test-center">Nombres</th>
                                                <th class="th-description">Apellidos</th>
                                                <th class="text-right">Fecha Nacimiento</th>
                                                <th class="text-right">Contrato</th>
                                                <th>Acciones</th>
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
<x-modals.delete/>
@endsection
@section('footer')
    <script src="{{asset('assets/js/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/jquery.datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts/player.js')}}" type="module"></script>
@endsection