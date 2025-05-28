@extends('template.template')
@section('container')
<div class="wrapper">
    <x-navs.main/>
    <div class="main-panel">
        <x-navs.top/>

        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                            <div class="col-md-6">
                                <div class="card ">
                                    <div class="card-header ">
                                        <h4 class="card-title">Total de Equipos</h4>
                                        <p class="card-category">Cantidad de Equipos Registrados</p>
                                    </div>
                                    <div class="card-body ">
                                        <div id="chartViews" class="ct-chart"></div>
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
    <script src="{{asset('assets/js/chartist.min.js')}}"></script>
     <script src="{{asset('assets/js/scripts/dash.js')}}" type="module"></script>
@endsection
