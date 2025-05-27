<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese Nuevo Jugador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                              <div class="row">
                                    <div class="col-md-8 col-sm-6">
                                        <form class="form" id="player">
                                            <div class="card ">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-md-5 pr-1">
                                                            <div class="form-group">
                                                                <label>Equipo (Desabilitado)</label>
                                                                <input type="text" class="form-control" disabled="" placeholder="Equipo" id="idTeamName">
                                                                <input type="text" name="team" id="idTeam" class="d-none">
                                                                <input type="text" name="user" id="idUser" class="d-none">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 px-1">
                                                            <div class="form-group">
                                                                <label>Dni</label>
                                                                <input type="text" class="form-control" placeholder="Numero DNI" name="dni" id="dniPLayer" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1 pl-1">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Buscar</label>
                                                                <button type="button" class="btn btn-warning" id="btnDni"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 pr-1">
                                                            <div class="form-group">
                                                                <label>Nombres</label>
                                                                <input type="text" class="form-control" placeholder="Company" name="firtsname" readonly id="firtsname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 pl-1">
                                                            <div class="form-group">
                                                                <label>Apellidos</label>
                                                                <input type="text" class="form-control" placeholder="Last Name" name="lastname" readonly id="lastname" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 pr-1">
                                                            <div class="form-group">
                                                                <label>Oficina</label>
                                                                    <select name="office" id="offices" class="form-control" required>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-4 pl-1">
                                                            <div class="form-group">
                                                                <label>Fecha Nacimiento</label>
                                                                <input type="date" class="form-control" placeholder="Last Name" value="Andrew" name="born" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 pl-1">
                                                            <div class="form-group">
                                                                <label>Contrato</label>
                                                                 <select name="legacy" id="offices" class="form-control" required>
                                                                    <option value="0">Seleccione</option>
                                                                    <option value="1">CAS</option>
                                                                    <option value="2">LOCACION</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card card-user">
                                                <div class="card-header no-padding">
                                                    <div class="card-image">
                                                        <img src="../../assets/img/full-screen-image-3.jpg" alt="...">
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="author">
                                                        <a href="#">
                                                            <img class="avatar border-gray" src="../../assets/img/default-avatar.png" alt="...">
                                                            <h5 class="card-title">Tania Keatley</h5>
                                                        </a>
                                                        <p class="card-description">
                                                           
                                                        </p>
                                                    </div>
                                          
                                                </div>
                                         
                                            </div>
                                        </div>
                                    
                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-warning btn-wd">Guardar Cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>