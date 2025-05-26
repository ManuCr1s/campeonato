 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Eliminar Jugador</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="deletePlayer">
                        <label for="nombre">Jugador</label>
                        <input type="text" class="d-none" id="dniPlayer" name="dniPlayer">
                        <input type="text" class="form-control p-1"  id="namePlayer" name="namePlayer" readonly>
                    
        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-danger">Eliminar Jugador</button>
                    </div>
            </form>
        </div>
    </div>
</div>