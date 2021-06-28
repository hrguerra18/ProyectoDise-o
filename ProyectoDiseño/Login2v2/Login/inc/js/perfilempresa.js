
$(document).ready(function () {
    ConsultarPerfil();
});


function ConsultarPerfil() {
    var NIT = $("#nitempresa").val();
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/perfilEmpresa.php",
        data: {
            accion: "consultarperfil",
            NIT: NIT,
        },
        success: function (resp) {
            console.log(resp);
            $("#nombreempresa").val(resp[0]['nombre']);
            $("#categoriaempresa").val(resp[0]['servicio']);
            $("#direccionempresa").val(resp[0]['direccion']);
            $("#telefonoempresa").val(resp[0]['telefono']);
            $("#nitempresa").val(resp[0]['NIT']);
            $("#paginaweb").val(resp[0]['pagina']);
            $("#numeroempleado").val(resp[0]['cantidadEmpleado']);
            $("#descripcion").val(resp[0]['descripcionEmpresa']);
            $("#ciudad").val(resp[0]['ciudad']);
            $("#departamentoEmpresa").val(resp[0]['departamentoEmpresa']);
        }
    });
}

function ModificarPerfil() {
    
    var NIT = $("#nitempresa").val();
    var nombre = $("#nombreempresa").val();
    var servicio = $("#categoriaempresa").val();
    var direccion = $("#direccionempresa").val();
    var telefono = $("#telefonoempresa").val();
    var pagina = $("#paginaweb").val();
    var CantidadEmpleado = $("#numeroempleado").val();
    var descripcion = $("#descripcion").val();
    var ciudad = $("#ciudad").val();
    var departamento = $("#departamentoEmpresa").val();
    
    $.ajax({
        type: 'POST',
        dataType: "json",
        url: 'Controles/perfilEmpresa.php',
        data: {
            accion: "modificar",
            NIT: NIT,
            nombre: nombre,
            servicio: servicio,
            direccion: direccion,
            telefono: telefono,
            pagina : pagina,
            CantidadEmpleado: CantidadEmpleado,
            descripcion: descripcion,
            ciudad: ciudad,
            departamento,departamento
        },
        success: function (resp) {
            if(resp.mensaje == "Se modifico"){
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Exito...",
                    text: "Se ha modificado el perfil correctamente!",
                    showConfirmButton: false,
                    timer: 2500,
                  });
                  setInterval(RecargarPerfilEmpresa,2500);
            }
            
        }
    });
}
function RecargarPerfilEmpresa(){
    window.location = "perfilEmpresa.php";
}

function limpiar() {
    $("#nitempresa").val("");
    $("#nombreempresa").val("");
    $("#categoriaempresa").val("");
    $("#direccionempresa").val("");
    $("#telefonoempresa").val("");
    $("#paginaweb").val("");
    $("#numeroempleado").val("");
    $("#descripcion").val("");
    $("#ciudad").val(2);
}