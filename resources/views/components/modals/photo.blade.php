 <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="photoModalLabel">Subir foto Jugador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="photoPlayer">
                        @csrf
                         <div class="form-group">
                            <label for="exampleFormControlFile1">Ingresa Fotografia</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                        </div>
                        <input type="text" class="d-none" id="dniPhotoPlayer" name="dniPhotoPlayer">                    
        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-warning">Ingresar foto Jugador</button>
                    </div>
            </form>
        </div>
    </div>
</div>