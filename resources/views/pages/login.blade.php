@extends('template.template')
@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('container')
<div class="full-page  section-image" data-color="black" data-image="{{asset('assets/img/full-screen-image-2.jpg')}}";>
<div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" id="login">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">Campeonato 2025</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Usuario</label>
                                            <input type="text" placeholder="Ingrese Usuario" class="form-control" name="user" id="user">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" placeholder="Ingrese Contraseña" class="form-control" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <a href="{{route('user.register')}}" target="_blank" rel="noopener noreferrer">Registro de Delegados</a>                                               
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-warning btn-wd">Ingrese Usuario</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
</div>
</div>
@endsection
@section('footer')
    <script type="text/javascript">
        $().ready(function(){
           // lbd.checkFullPageBackgroundImage();
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
    <script src="{{asset('assets/js/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts/login.js')}}" type="module"></script>
@endsection
