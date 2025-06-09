@extends('template.template')
@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('container')
<div class="wrapper">
    <x-navs.main/>
    <div class="main-panel">
        <x-navs.top/>

        <div class="main-content">
            <div class="container-fluid">
            <div class="row">
                            <div class="col-md-12 mt-5">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h4 class="card-title">Total de Equipos</h4>
                                        <p class="card-category">Cantidad de Equipos Registrados</p>
                                        <table class="table table-bigboy" id="tableTeamFinal">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Id</th>
                                                        <th class="test-center">Nombre</th>
                                                        <th class="th-description">Delegado</th>
                                                        <th class="text-center">Oficina </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                           
                </div>
                <div class="row">
                            <div class="col-md-12 mt-5">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h4 class="card-title">Total de Jugadores</h4>
                                        <p class="card-category">Cantidad de Jugadores Registrados</p>
                                        <table class="table table-bigboy" id="tablePlayerTeam">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Dni</th>
                                                        <th class="test-center">Nombres</th>
                                                        <th class="th-description">Apellidos</th>
                                                        <th class="text-center">Nacimiento </th>
                                                        <th class="text-center">Delegado</th>
                                                        <th class="text-center">Equipo</th>
                                                        <th class="text-center">Oficina</th>
                                                        <th class="text-center">Contrato</th>
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
@endsection
@section('footer')
 <!-- DataTables core -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Buttons extension -->
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<!-- pdfMake (necesario para exportar PDF) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="{{asset('assets/js/scripts/admin.js')}}" type="module"></script>
@endsection
