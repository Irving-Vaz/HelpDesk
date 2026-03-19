<!-- Modal -->
<form method="POST" id="frmActualizarDatosPersonales" onsubmit="return actualizarDatosPersonales()"> 
<div class="modal fade" id="modalActualizarDatosPersonales" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Actualizar Datos Personales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="paternoInicio">Apellido Paterno</label>
                <input type="text" class="form-control" id="paternoInicio" name="paternoInicio">
                <label for="maternoInicio">Apellido Materno</label>
                <input type="text" class="form-control" id="maternoInicio" name="maternoInicio">
                <label for="nombreInicio">Nombre</label>
                <input type="text" class="form-control" id="nombreInicio" name="nombreInicio">
                <label for="telefonoInicio">Telefono</label>
                <input type="text" class="form-control" id="telefonoInicio" name="telefonoInicio">
                <label for="correoInicio">Correo</label>
                <input type="email" class="form-control" id="correoInicio" name="correoInicio">
                <label for="fechaNacimientoInicio">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimientoInicio" name="fechaNacimientoInicio">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
</div>
</form>
