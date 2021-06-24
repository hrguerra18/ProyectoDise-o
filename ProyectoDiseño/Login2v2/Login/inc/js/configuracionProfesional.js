function CambiarCorreoProfesional() {
  let idUsuario = document.getElementById("idProfesional").value;
  let correoAnterior = document.getElementById("correo").value;
  let correoNuevo1 = document.getElementById("correoProfesional1").value;
  let correoNuevo2 = document.getElementById("correoProfesional2").value;

  expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  let correoNuevo1Validado = ValidarCorreo(correoNuevo1);
  let correoNuevo2Validado = ValidarCorreo(correoNuevo2);

  if (
    idUsuario != "" &&
    correo != "" &&
    correoNuevo1 != "" &&
    correoNuevo2 != ""
  ) {
    if (correoNuevo1Validado == true && correoNuevo2Validado == true) {
      if (correoNuevo1 == correoNuevo2) {
        $.ajax({
          type: "POST",
          dateType: "json",
          url: "Controles/configuracionProfesional.php",
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
              setTimeout(RecargarPagina, 2500);
            } else if (
              mensaje.mensaje ==
              "Ya el correo se encuentra registrado, pruebe con otro"
            ) {
              MensajeCuandoElCorreoYaEstaRegistrado();
              setTimeout(RecargarPagina, 3000);
            }
          },
        });
      } else {
        MensajeCorreosCoincidan();
        setTimeout(RecargarPagina, 3000);
      }
    } else {
      NoEsFormatoCorreo();
    }
  } else {
    MensajeDatosVacios();
  }
}
function RecargarPagina() {
  window.location = "configuracionProfesional.php";
}

function MensajeCuandoElCorreoYaEstaRegistrado() {
  return Swal.fire({
    icon: "error",
    title: "Error...",
    text: 'Ya ese correo que desea se encuentra ocupado por otro usuario, pruebe con otro"!',
    footer: "",
  });
}

function ValidarCorreo(correo) {
  if (expr.test(correo)) {
    return true;
  } else {
    return false;
  }
}

function NoEsFormatoCorreo() {
  return Swal.fire({
    icon: "error",
    title: "Error...",
    text: "Asegurese de que los datos sean de tipo correo!",
    footer: "",
  });
}

function MensajeDatosVacios() {
  return Swal.fire({
    icon: "error",
    title: "Error...",
    text: "Ingrese los datos correctamente!",
    footer: "",
  });
}

function MensajeDeModificacionCorreo() {
  return Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Confirmado...",
    text: "Con el nuevo correo ingresaras",
    showConfirmButton: false,
    timer: 2500,
  });
}

function MensajeCorreosCoincidan() {
  return Swal.fire({
    icon: "error",
    title: "Error...",
    text: "Asegurese de que los correos coincidan!",
    footer: "",
  });
}

function FalloContraseña(){
    return Swal.fire({
        position: "top-end",
        icon: "error",
        title: "Error...",
        text: "Asegurese que coincidan las contraseñas",
        showConfirmButton: false,
        timer: 2500,
      });
}

function ExitoContraseña() {
  return Swal.fire({
    position: "top-end",
    icon: "success",
    title: "Confirmado...",
    text: "Se ha modificado correctamente la contraseña de su usuario",
    showConfirmButton: false,
    timer: 2500,
  });
}

function CambiarContraseñaProfesional() {
  let correo = document.getElementById("correo").value;
  let contraseñaProfesional1 = document.getElementById(
    "contraseñaProfesional1"
  ).value;
  let contraseñaProfesional2 = document.getElementById(
    "contraseñaProfesional2"
  ).value;

  if (
    correo != "" &&
    contraseñaProfesional1 != "" &&
    contraseñaProfesional2 != ""
  ) {
    if (contraseñaProfesional1 == contraseñaProfesional2) {
      $.ajax({
        type: "POST",
        dateType: "json",
        url: "Controles/configuracionProfesional.php",
        async: false,
        data: {
          accion: "cambiarContraseña",
          correo: correo,
          contraseñaProfesional1: contraseñaProfesional1,
          contraseñaProfesional2: contraseñaProfesional2,
        },
        success: function (resp) {
          mensaje = JSON.parse(resp);
          if (mensaje.mensaje == "Se modifico correctamente") {
            ExitoContraseña();
            setTimeout(RecargarPagina, 2500);
          } else if (mensaje.mensaje == "Error") {
            
              FalloContraseña();
              setTimeout(RecargarPagina,2500);
           
          }
        },
      });
    } else {
        FalloContraseña();
        setTimeout(RecargarPagina,2500);
    }
  } else {
    MensajeDatosVacios();
  }
}
