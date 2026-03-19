<form id="frmActualizarPassword" onsubmit="return resetPassword()" method="POST">
    <!-- Modal -->
<div class="modal fade" id="modalResetPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resetear password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="idUsuarioReset" name="idUsuarioReset">
        <label for="">Escribe tu password nuevo</label>
        <input type="text" id="passwordReset" name="passwordReset" class="form-control" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Cambiar password</button>
      </div>
    </div>
  </div>
</div>
</form>
