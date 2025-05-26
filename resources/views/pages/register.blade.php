@extends('template.template')
@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
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
                                    <form id="register">
                                        <div class="card card-plain">
                                            <div class="content">
                                                <div class="form-group d-flex has-label">
                                                    <input type="text" placeholder="Ingrese DNI" class="form-control" name="dni" maxlength="8" id="valDni">
                                                    <button type="button" class="btn btn-warning" id="btnDni"><i class="fa fa-search"></i></button>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Nombres" class="form-control" name="firtsname" id="firtsname" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Apellidos" class="form-control" name="lastname" id="lastname" readonly>
                                                </div>
                                                 <div class="form-group">
                                                    <select name="offices" id="offices" class="form-control">
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" placeholder="Contraseña" class="form-control" name="password" id="password">
                                                </div>
                                             
                                            </div>
                                            <div class="footer text-center">
                                                <button type="submit" class="btn btn-fill btn-neutral btn-wd">Crear Cuenta Delegado</button>
                                                <a href="{{route('user.login')}}" target="_blank" rel="noopener noreferrer" class="btn btn-fill btn-secondary btn-wd">Volver a Login Delegado</a>
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
@section('footer')
    <script src="{{asset('assets/js/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts/register.js')}}" type="module"></script>
@endsection

