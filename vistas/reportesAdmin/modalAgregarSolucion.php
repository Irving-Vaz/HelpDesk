<form method="POST" id="frmAgregarSolucionReporte" onsubmit="return agregarSolucionReporte()">
    <!-- Modal -->
        <div class="modal fade" id="modalAgregarSolucionReporte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Escribe la solucion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="idReporte" name="idReporte" >
                        <label for="solucion">descripcion de la solucion</label>
                        <textarea name="solucion" id="solucion" class="form-control" required></textarea>
                        <label for="estatus">Estatus</label>
                        <select name="estatus" id="estatus" class="form-control">
                            <option value="1">Abierto</option>
                            <option value="0">Cerrado</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
