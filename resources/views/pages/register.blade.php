@extends('template.template')
@section('container')
<div class="wrapper wrapper-full-page">

        <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="full-page register-page section-image" data-color="orange" data-image="{{asset('assets/img/bg5.jpg')}}">
            <div class="content">
                <div class="container">
                    <div class="card card-register card-plain text-center">
                        <div class="card-header ">
                            <div class="row  justify-content-center">
                                <div class="col-md-8">
                                    <div class="header-text">
                                        <h3 class="card-title">Campeonato HMPP - 2025</h3>
                                        <hr />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="icon">
                                                <i class="nc-icon nc-circle-09"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4>Delegado de Equipo</h4>
                                            <p>Ingrese sus datos personales, recuerde que solo puede delegar un equipo</p>
                                        </div>
                                    </div>
                             
                                </div>
                                <div class="col-md-4 mr-auto">
                                    <form method="#" action="#">
                                        <div class="card card-plain">
                                            <div class="content">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Ingrese DNI" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Nombres" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Apellidos" class="form-control">
                                                </div>
                                    
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" class="form-control">
                                                </div>
                                             
                                            </div>
                                            <div class="footer text-center">
                                                <button type="submit" class="btn btn-fill btn-neutral btn-wd">Crear Cuenta Delegado</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

