function AdicionarEmpresa() {

    var NIT = $("#Nitempresa").val();
    var foto = $("#fotoempresa").val();
    var nombre = $("#nombreempresa").val();
    var servicio = $("#servicioempresa").val();
    var direccion = $("#direccionempresa").val();
    var telefono = $("#telefonoempresa").val();
    var correo = $("#emailempresa").val();
    var contraseña = $("#contraseñaempresa").val();

    if(NIT != "" && foto != "" && nombre != ""  && direccion != "" && telefono != "" && correo != "" && contraseña != ""){
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "Controles/empresas.php",
            data: {
                accion: "adicionar",
                NIT: NIT,
                foto: foto,
                nombre: nombre,
                servicio: servicio,
                direccion: direccion,
                telefono: telefono,
                correo: correo,
                contraseña: contraseña,
            },
            success: function (resp) {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Exito...",
                    text: "Registro exitoso, ahora podra ingresar!",
                    showConfirmButton: false,
                    timer: 2500,
                  });
                  setInterval(mandarAlLogin,2500);
            }
        });
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Ingrese los datos correctamente!',
            footer: ''
          })
    }
   
    
}


function mandarAlLogin(){
    window.location = "login.php"
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