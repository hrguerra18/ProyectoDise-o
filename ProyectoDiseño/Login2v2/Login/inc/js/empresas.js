function AdicionarEmpresa() {

    var NIT = $("#Nitempresa").val();
    var foto = $("#fotoempresa").val();
    var nombre = $("#nombreempresa").val();
    var servicio = $("#servicioempresa").val();
    var direccion = $("#direccionempresa").val();
    var telefono = $("#telefonoempresa").val();
    var correo = $("#emailempresa").val();
    var contraseña = $("#contraseñaempresa").val();

    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    let correoNuevo1Validado = ValidarCorreoRegistroEmpresa(correo);

    if(NIT != "" && foto != "" && nombre != ""  && direccion != "" && telefono != "" && correo != "" && contraseña != "" && correoNuevo1Validado==true){
        let legabilidad = BuscarLegabilidadEmpresa(NIT)
        
        if(legabilidad == true){
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
                text: 'Usted no se encuentra registrado en la camara de comercio como empresa legal!',
                footer: ''
              })
              setInterval(RecargarRegistroEmpresa,2500);
        }
       
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'Ingrese los datos correctamente!',
            footer: ''
          })
    }
   
    
}

function RecargarRegistroEmpresa(){
    window.location = "registrarEmpresa.php"
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

function BuscarLegabilidadEmpresa(NIT){
    var legabilidad;
   
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/empresas.php",
        async : false,
        data: {
            accion: "buscarLegabilidad",
            NIT: NIT,
        },
        success: function (resp) {
            legabilidad = resp.mensaje;
            
           console.log(resp)
        }
    });
    alert("lo que devolvio"+legabilidad);
return legabilidad;

}

function ValidarCorreoRegistroEmpresa(correo) {
    if (expr.test(correo)) {
      return true;
    } else {
      return false;
    }
  }