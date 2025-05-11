@extends('template.template')
@section('container')
<div class="wrapper">
    <x-navs.main/>
    <div class="main-panel">
        <x-navs.top/>

        <div class="main-content">
            <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="">
                                <div class="col-6">
                                    <h4 class="title">Tabla de Jugadores Inscritos</h4>
                                    <p class="category">Lista de los jugadores participantes del Campeonato</p>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd">Registre Nuevo Jugador</button>
                                </div>
                                <br />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-bigboy">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Fotografia</th>
                                            <th >Dni</th>
                                            <th class="th-description">Nombres y Apellidos</th>
                                            <th class="text-right">Cargo</th>
                                            <th class="text-right">Oficina</th>
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
                                                15487896
                                            </td>
                                            <td>
                                                HUMBERTO RIOS VENTANILLA
                                            </td>
                                            <td class="td-number">GERENTE DE RECURSOS HUMANOS</td>
                                            <td class="td-number">
                                                OFICINA DE RECURSOS HUMANOS
                                            </td>
                                            <td class="td-actions">
                                                <button type="button" rel="tooltip" data-placement="left" title="View Post" class="btn btn-info btn-simple btn-icon">
                                                    <i class="fa fa-image"></i>
                                                </button>
                                                <button type="button" rel="tooltip" data-placement="left" title="Edit Post" class="btn btn-success btn-simple btn-icon">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" data-placement="left" title="Remove Post" class="btn btn-danger btn-simple btn-icon ">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                             <td>
                                                <div class="img-container">
                                                    <img src="../../assets/img/blog-2.jpg" alt="...">
                                                </div>
                                            </td>
                                            <td class="td-name">
                                                96857412
                                            </td>
                                            <td>
                                                JAVIER SOLIS PEREZ
                                            </td>
                                           <td class="td-number">TECNICO ADMINISRATIVO</td>
                                            <td class="td-number">
                                                GERENCIA DE INFRAESTRUCTURA
                                            </td>
                                            <td class="td-actions">
                                                <button type="button" rel="tooltip" data-placement="left" title="View Post" class="btn btn-info btn-simple btn-icon">
                                                    <i class="fa fa-image"></i>
                                                </button>
                                                <button type="button" rel="tooltip" data-placement="left" title="Edit Post" class="btn btn-success btn-simple btn-icon">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" data-placement="left" title="Remove Post" class="btn btn-danger btn-simple btn-icon ">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="img-container">
                                                    <img src="../../assets/img/blog-3.jpg" alt="...">
                                                </div>
                                            </td>
                                            <td class="td-name">
                                                04008889
                                            </td>
                                            <td>
                                                JUAN PEREZ PEREZ
                                            </td>
                                            <td class="td-number">ESPECIALISTA TECNICO DE RESIDUOS</td>
                                            <td class="td-number">
                                                SUB GERENICA DE MEDIO AMBIENTE
                                            </td>
                                            <td class="td-actions">
                                                <button type="button" rel="tooltip" data-placement="left" title="View Post" class="btn btn-info btn-simple btn-icon">
                                                    <i class="fa fa-image"></i>
                                                </button>
                                                <button type="button" rel="tooltip" data-placement="left" title="Edit Post" class="btn btn-success btn-simple btn-icon">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" rel="tooltip" data-placement="left" title="Remove Post" class="btn btn-danger btn-simple btn-icon ">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </td>                                        </tr>
                                       

                                    </tbody>
                                </table>
                            </div>
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>
</div>
@endsection
