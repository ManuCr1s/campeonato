<div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                CD
            </a>

			<a href="http://www.creative-tim.com" class="simple-text logo-normal">
			    Campeonato 2025
			</a>
        </div>

    	<div class="sidebar-wrapper">
            <div class="user">
				<div class="info">
					<div class="photo">
	                    <img src="../assets/img/default-avatar.png" />
	                </div>

					<a data-toggle="collapse" href="#collapseExample" class="collapsed">
						<span>
							Usuario
	                        <b class="caret"></b>
						</span>
                    </a>

					<div class="collapse" id="collapseExample">
						<ul class="nav">
							<li>
								<a href="#pablo">
									<span class="sidebar-mini">MP</span>
									<span class="sidebar-normal">My Profile</span>
								</a>
							</li>

							<li>
								<a href="#pablo">
									<span class="sidebar-mini">EP</span>
									<span class="sidebar-normal">Edit Profile</span>
								</a>
							</li>

							<li>
								<a href="#pablo">
									<span class="sidebar-mini">S</span>
									<span class="sidebar-normal">Settings</span>
								</a>
							</li>
						</ul>
                    </div>
				</div>
            </div>

			<ul class="nav">
				<li class="active">
					<a href="{{route('user.dashboard')}}">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a data-toggle="collapse" href="#teams">
                        <i class="pe-7s-plugin"></i>
                        <p>Mi equipo
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="teams">
						<ul class="nav">
							<li>
								<a href="{{route('user.teams')}}">
									<span class="sidebar-mini">ME</span>
									<span class="sidebar-normal">Mi Equipo</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li>
					<a data-toggle="collapse" href="#players">
                        <i class="pe-7s-note2"></i>
                        <p>Jugadores
                           <b class="caret"></b>
                        </p>
                    </a>
					<div class="collapse" id="players">
						<ul class="nav">
							<li>
								<a href="{{route('user.player')}}">
									<span class="sidebar-mini">I</span>
									<span class="sidebar-normal">Inscritos</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
    	</div>
    </div>