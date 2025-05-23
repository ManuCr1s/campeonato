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
                                    <table class="table table-bigboy">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Foto</th>
                                                <th>Nombres</th>
                                                <th class="th-description">Apellidos</th>
                                                <th class="text-right">Fecha Nacimiento</th>
                                                <th class="text-right">Contrato</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="img-container">
                                                        <img src="../../assets/img/blog-1.jpg" alt="...">
                                                    </div>
                                                </td>
                                                <td class="td-name">
                                                    10 Things that all designers do
                                                </td>
                                                <td>
                                                    Most beautiful agenda for the office, really nice paper and black cover. Most beautiful agenda for the office.
                                                </td>
                                                <td class="td-number">30/08/2016</td>
                                                <td class="td-number">
                                                    1,225
                                                </td>
                                                <td class="td-actions">
                                                    <button type="button" rel="tooltip" data-placement="left" title="View Post" class="btn btn-info btn-link btn-icon">
                                                        <i class="fa fa-image"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" data-placement="left" title="Edit Post" class="btn btn-success btn-link btn-icon">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" rel="tooltip" data-placement="left" title="Remove Post" class="btn btn-danger btn-link btn-icon ">
                                                        <i class="fa fa-times"></i>
                                                    </button>
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
    <script src="{{asset('assets/js/jquery.datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts/player.js')}}" type="module"></script>
@endsection