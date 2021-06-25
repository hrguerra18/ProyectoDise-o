

function AdicionarProfesional() {
    

    var identidad = $("#identidad").val();
    var foto = $("#foto").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#email").val();
    var contraseña = $("#contraseña").val();
    
    if(identidad != "" && foto != "" && nombre != "" && apellido != "" && direccion != "" && telefono != "" && correo != "" && contraseña != ""){
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "Controles/profesionales.php",
            data: {
                accion: "adicionar",
                identidad: identidad,
                foto: foto,
                nombre: nombre,
                apellido: apellido,
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
                    text: "Usted se acaba de registrar!",
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


function Limpiar() {
    $("#identidad").val() = "";
    $("#foto").val() = "";
    $("#nombre").val() = "";
    $("#apellido").val() = "";
    $("#direccion").val() = "";
    $("#telefono").val() = "";
    $("#email").val() = "";
    $("contraseña").val() = "";
}