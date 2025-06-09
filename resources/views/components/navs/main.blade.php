<div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                        CD
                    </a>
                    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                        Campeonato
                    </a>
                </div>
                <div class="user">
                    <div class="photo">
                        <img src="../assets/img/face-1.jpg" />
                    </div>
                    <div class="info ">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>{{Auth::user()->name}}
                                <div id="app" data-username="{{ Auth::user()->dni }}"></div>
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">EP</span>
                                        <span class="sidebar-normal">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('user.dashboard')}}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    @if(auth()->user()->hasRole('Admin'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#teams">
                            <i class="nc-icon nc-app"></i>
                            <p>
                                Estadisticas
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="teams">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('user.admin')}}">
                                        <span class="sidebar-mini">E</span>
                                        <span class="sidebar-normal">Equipos</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    @if(auth()->user()->hasRole('Delegate'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#teams">
                            <i class="nc-icon nc-app"></i>
                            <p>
                                Mi equipo
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="teams">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('user.team')}}">
                                        <span class="sidebar-mini">E</span>
                                        <span class="sidebar-normal">Equipo</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    @if(auth()->user()->hasRole('Delegate'))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#players">
                            <i class="nc-icon nc-notes"></i>
                            <p>
                                Mis jugadores
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="players">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{route('user.player')}}">
                                        <span class="sidebar-mini">J</span>
                                        <span class="sidebar-normal">Jugadores</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                </ul>
            </div>
        </div>