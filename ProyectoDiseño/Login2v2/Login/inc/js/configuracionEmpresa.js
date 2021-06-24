function CambiarCorreoEmpresa(){
    let idUsuario = document.getElementById("idEmpresa").value;
  let correoAnterior = document.getElementById("correoEmpresa").value;
  let correoNuevo1 = document.getElementById("correoEmpresa1").value;
  let correoNuevo2 = document.getElementById("correoEmpresa2").value;

  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  let correoNuevo1Validado = ValidarCorreo(correoNuevo1);
  let correoNuevo2Validado = ValidarCorreo(correoNuevo2);

  if (idUsuario != "" &&correoAnterior != "" &&correoNuevo1 != "" &&correoNuevo2 != "") {
    if (correoNuevo1Validado == true && correoNuevo2Validado == true) {
      if (correoNuevo1 == correoNuevo2) {
        $.ajax({
          type: "POST",
          dateType: "json",
          url: "Controles/configuracionEmpresa.php",
          async: false,
          data: {
            accion: "cambiarCorreo",
            idUsuario: idUsuario,
            correoAnterior: correoAnterior,
            correoNuevo1: correoNuevo1,
            correoNuevo2: correoNuevo2,
          },
          success: function (resp) {
            mensaje = JSON.parse(resp);
            if (mensaje.mensaje == "Se modifico correctamente") {
              MensajeDeModificacionCorreo();
              setTimeout(RecargarPaginaEmpresa, 2500);
            } else if (mensaje.mensaje =="Ya el correo se encuentra registrado, pruebe con otro"
            ) {
              MensajeCuandoElCorreoYaEstaRegistrado();
              setTimeout(RecargarPaginaEmpresa, 3000);
            }
          },
        });
      } else {
        MensajeCorreosCoincidan();
        setTimeout(RecargarPaginaEmpresa, 3000);
      }
    } else {
      NoEsFormatoCorreo();
    }
  } else {
    MensajeDatosVacios();
  }
}


function CambiarContraseñaEmpresa() {
    let correo = document.getElementById("correoEmpresa").value;
    let contraseñaEmpresa1 = document.getElementById("contraseñaEmpresa1").value;
    let contraseñaEmpresa2 = document.getElementById( "contraseñaEmpresa2").value;
  
    if ( correo != "" &&contraseñaEmpresa1 != "" && contraseñaEmpresa2 != "") {
      if (contraseñaEmpresa1 == contraseñaEmpresa2) {
        $.ajax({
          type: "POST",
          dateType: "json",
          url: "Controles/configuracionEmpresa.php",
          async: false,
          data: {
            accion: "cambiarContraseña",
            correo: correo,
            contraseñaEmpresa1: contraseñaEmpresa1,
            contraseñaEmpresa2: contraseñaEmpresa2,
          },
          success: function (resp) {
            mensaje = JSON.parse(resp);
            if (mensaje.mensaje == "Se modifico correctamente") {
              ExitoContraseña();
              setTimeout(RecargarPaginaEmpresa, 2500);
            } else if (mensaje.mensaje == "Error") {
              
                FalloContraseña();
                setTimeout(RecargarPaginaEmpresa,2500);
             
            }
          },
        });
      } else {
          FalloContraseña();
          setTimeout(RecargarPaginaEmpresa,2500);
      }
    } else {
      MensajeDatosVacios();
    }
  }

  function RecargarPaginaEmpresa(){
      window.location = "configuracionEmpresa.php";
  }