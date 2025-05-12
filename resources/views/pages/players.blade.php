@extends('template.template')
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
                                    <button type="button" class="btn btn-warning btn-wd" data-toggle="modal" data-target="#exampleModal">
                                            Ingrese Jugador
                                    </button>
                                    <x-modals.player/>
                                </div>
                                <div class="card-body table-full-width">
                                    <table class="table table-bigboy">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Thumb</th>
                                                <th>Blog Title</th>
                                                <th class="th-description">Description</th>
                                                <th class="text-right">Date</th>
                                                <th class="text-right">Views</th>
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
                                            <tr>
                                                <td>
                                                    <div class="img-container">
                                                        <img src="../../assets/img/blog-2.jpg" alt="...">
                                                    </div>
                                                </td>
                                                <td class="td-name">
                                                    Back to School Offer
                                                </td>
                                                <td>
                                                    Design is not just what it looks like and feels like. Design is how it works.
                                                </td>
                                                <td class="td-number">17/07/2016</td>
                                                <td class="td-number">
                                                    49,302
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
                                            <tr>
                                                <td>
                                                    <div class="img-container">
                                                        <img src="../../assets/img/blog-3.jpg" alt="...">
                                                    </div>
                                                </td>
                                                <td class="td-name">
                                                    First Dribbble Meetup in Romania
                                                </td>
                                                <td>
                                                    A groundbreaking Retina display. All-flash architecture. Fourth-generation Intel processors.
                                                </td>
                                                <td class="td-number">23/06/2016</td>
                                                <td class="td-number">
                                                    1,799
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
                                            <tr>
                                                <td>
                                                    <div class="img-container">
                                                        <img src="../../assets/img/blog-4.jpg" alt="...">
                                                    </div>
                                                </td>
                                                <td class="td-name">
                                                    How we created our startup with 0$
                                                </td>
                                                <td>
                                                    A desk is a generally wooded piece of furniture and a type of useful table often used in a school or office setting for various academic or professional activities ...
                                                </td>
                                                <td class="td-number">30/06/2016</td>
                                                <td class="td-number">
                                                    23,030
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
                                            <tr>
                                                <td>
                                                    <div class="img-container">
                                                        <img src="../../assets/img/blog-1.jpg" alt="...">
                                                    </div>
                                                </td>
                                                <td class="td-name">
                                                    To use or not to use Bootstrap
                                                </td>
                                                <td>
                                                    The Office Chair adapts naturally to virtually every body and is a permanent fixture.
                                                </td>
                                                <td class="td-number">10/05/2016</td>
                                                <td class="td-number">
                                                    13,763
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
