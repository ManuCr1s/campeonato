@extends('template.template')
@section('container')
<div class="full-page  section-image" data-color="black" data-image="{{asset('assets/img/full-screen-image-2.jpg')}}";>
<div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" id="login">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">CAMPEONATO 2025</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            @csrf
                                            <label>Usuario</label>
                                            <input type="text" placeholder="Ingrese Dni" class="form-control" name="user" id="user">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" placeholder="Ingrese Contraseña" class="form-control" name="pass">
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
    <script src="{{asset('assets/js/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/scripts/login.js')}}" type="module"></script>
@endsection
