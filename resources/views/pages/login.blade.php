@extends('template.template')
@section('container')
<div class="full-page  section-image" data-color="black" data-image="{{asset('assets/img/full-screen-image-2.jpg')}}";>
<div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <form class="form" method="" action="">
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">Campeonato 2025</h3>
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Usuario</label>
                                            <input type="email" placeholder="Ingrese Usuario" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input type="password" placeholder="Ingrese Contraseña" class="form-control">
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
@endsection
