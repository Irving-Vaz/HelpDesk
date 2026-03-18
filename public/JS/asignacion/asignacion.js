function asignarEquipo(){
    $.ajax({
        type:"POST",
        data:$('#frmAsignaEquipo').serialize(),
        url:"../procesos/asignacion/asignar.php",
        success:function(respuesta){
               respuesta = respuesta.trim();

               if (respuesta == 1) {
                    $('#frmAsignaEquipo')[0].reset();
                    Swal.fire(":D","Asignado con exito","success");
               }else{
                    Swal.fire(":D","Asignacion fallida" + respuesta,"error");
               }
                
        }
    });
    return false;
}