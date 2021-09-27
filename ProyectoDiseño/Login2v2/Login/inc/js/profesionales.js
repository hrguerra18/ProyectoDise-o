

function AdicionarProfesional() {
    var identidad = $("#identidad").val();
    var foto = $("#foto").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#email").val();
    var contraseña = $("#contraseña").val();
    let validarDatos = ValidarRegistroProfesional(identidad,foto,nombre,apellido,direccion,telefono,correo,contraseña)
    
    if(validarDatos[0]){
        let existenciaCorreo = BuscarExistenciaCorreoProfesional(correo);
        if(existenciaCorreo == true){
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
                text: 'El correo ya se encuentra ocupado, ingrese otro correo!',
                footer: ''
              })
              setInterval(RecargarRegistroProfesional,2500);
        }
        
    }else{
         mensaje(validarDatos[1])
    }

   
}

const mensaje = (mensaje)=>{
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: mensaje,
        footer: ''
      }).then((result) =>{
        // if (result.isConfirmed) {
        //     window.location = "registrarProfesional.php"
        // }
    })
}




function mandarAlLogin(){
    window.location = "login.php"
}

function RecargarRegistroProfesional(){
    window.location = "registrarProfesional.php"
}



  function BuscarExistenciaCorreoProfesional(correo){
    var existenciaCorreo;
   
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/empresas.php",
        async : false,
        data: {
            accion: "existenciaCorreo",
            correo: correo,
        },
        success: function (resp) {
            existenciaCorreo = resp.mensaje;
            
           console.log(resp)
        }
    });
return existenciaCorreo;
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