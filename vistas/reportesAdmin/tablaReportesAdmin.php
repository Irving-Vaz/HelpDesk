<?php
    session_start();
    include "../../clases/Conexion.php";
    $con = new Conexion();
    $conexion = $con->conectar();
    $idUsuario  =$_SESSION['usuario']['id'];
    $contador = 1;
    $sql = "SELECT 
                reporte.id_reporte AS idReporte,
                reporte.id_usuario AS idUsuario,
                CONCAT(persona.paterno,
                        ' ',
                        persona.materno,
                        ' ',
                        persona.nombre) AS nombrePersona,
                equipo.id_equipo AS idEquipo,
                equipo.nombre as nombreEquipo,
                reporte.descripcion_problema as problema,
                reporte.estatus AS estatus,
                reporte.solucion_problema as solucion,
                reporte.fecha as fecha
            FROM
                t_reportes AS reporte
                    INNER JOIN
                t_usuarios AS usuario ON reporte.id_usuario = usuario.id_usuario
                    INNER JOIN
                t_persona AS persona ON usuario.id_persona = persona.id_persona
                    INNER JOIN
                t_cat_equipo AS equipo ON reporte.id_equipo = equipo.id_equipo
                ORDER BY reporte.fecha DESC";
    $respuesta = mysqli_query($conexion,$sql);

?>




<table class="table table-sm table-bordered dt-responsive nowrap" style="width:100%" id="tablaReportesAdminDataTable">
    <thead>
        <th>#</th>
        <th>Persona</th>
        <th>Dispositivo</th>
        <th>Fecha</th>
        <th>Descripcion</th>
        <th>Estatus</th>
        <th>Solucion</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
    <?php
        while($mostrar = mysqli_fetch_array($respuesta)){
    ?>
        <tr>
            <td><?php echo $contador++; ?></td>
            <td><?php echo $mostrar['nombrePersona'];?></td>
            <td><?php echo $mostrar['nombreEquipo'];?></td>
            <td><?php echo $mostrar['fecha'];?></td>
            <td><?php echo $mostrar['problema'];?></td>
            <td><?php 
                $estatus = $mostrar['estatus'];
                $cadenaEstatus = '<span class="badge bg-success">Abierto</span>';
                if ($estatus == 0) {
                    $cadenaEstatus = '<span class="badge bg-danger">Cerrado</span>';
                }
                echo $cadenaEstatus;
                ?>
            </td>
            <td>
                <button class="btn btn-info btn-sm"
                            onclick="obtenerDatosSolucion('<?php echo $mostrar['idReporte']; ?>')" 
                            data-bs-toggle="modal" data-bs-target="#modalAgregarSolucionReporte">
                        Solucion
                    </button>    
                <?php echo $mostrar['solucion'];?>
            </td>
            <td>
                <?php
                    if ($mostrar['solucion'] == "") {
                ?>
                    <button class="btn btn-danger btn-sm" onclick="eliminarReporteAdmin(<?php echo $mostrar['idReporte']; ?>)">
                        Eliminar
                    </button>
                <?php
                    }
                ?>
            </td>
        </tr>
    <?php
        }
    ?>
    </tbody>
</table>

<script>
    $(document).ready(function(){
        $('#tablaReportesAdminDataTable').DataTable({
            responsive : true,
        dom: "<'row mb-3'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
             "<'row'<'col-sm-12'tr>>" +
             "<'row mt-3'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 d-flex justify-content-end'p>>",
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i> Excel',
                className: 'btn btn-success'
            },
            {
                extend: 'pdf',
                text: '<i class="far fa-file-pdf"></i> PDF',
                className: 'btn btn-danger'
            },
            {
                extend: 'print',
                text: '<i class="fas fa-print"></i> Imprimir',
                className: 'btn btn-dark'
            }
        ],
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
        });
    })
</script>