@extends('template.template')
@section('container')
<div class="wrapper">
    <x-navs.main/>
    <div class="main-panel">
        <x-navs.top/>
        <div class="content">
            <div class="container-fluid">
            <div class="row">
                        <div class="col-md-6">
                            <div class="card stacked-form">
                                <div class="card-header ">
                                    <h4 class="card-title">Ingrese Equipo</h4>
                                </div>
                                <div class="card-body ">
                                    <form method="#" action="#">
                                        <div class="form-group">
                                            <label>Nombre de Equipo</label>
                                            <input type="text" placeholder="Ingrese Nombre" class="form-control">
                                        </div>                        
                                    </form>
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-fill btn-warning">Registar Nombre</button>
                                </div>
                            </div>
                        </div>               
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
