$(document).ready(function(){
    ConsultarProfesionalIndex();
})


function ConsultarProfesionalIndex(){
   let Identidad = localStorage.getItem('idprofesionalIndex');
  
   if (Identidad != "") {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/mostrarInformacionProfesional.php",
        data: {
            accion: "consultarProfesional",
            Identidad: Identidad,
        },
        success: function (resp) {
            
             nombre = capitalize(resp[0]['nombre']);
             apellido = capitalize(resp[0]['apellido']);
            $("#carreraProfesional").val(resp[0]['carrera']);
            $("#identidadProfesional").val(resp[0]['Identidad']);
            $("#fechaNacimientoProfesional").val(resp[0]['fechaNacimiento']);
            $("#correoProfesional").val(resp[0]['correo']);
            $("#nombreProfesional").val(resp[0]['nombre']);
            $("#apellidoProfesional").val(resp[0]['apellido']);
            $("#sobreMiProfesional").val(resp[0]['sobreMi']);
            $("#direccionProfesional").val(resp[0]['direccion']);
            $("#telefonoProfesional").val(resp[0]['telefono']);
            $("#departamentoProfesional").val(resp[0]['departamentoProfesional']);
            $("#ciudadProfesional").val(resp[0]['ciudadProfesional']);
            $("#nivelAcademico").val(resp[0]['nivelAcademico']);
            $("#institucionEstudio").val(resp[0]['institucionEstudio']);
            $("#empresaLaboraste").val(resp[0]['empresaLaboraste']);
            $("#experienciaLaboral").val(resp[0]['experienciaLaboral']);
            $("#aspiracionSalarial").val(resp[0]['aspiracionSalarial']);
            img = document.getElementById("fotoProfesional");
            img.src = resp[0]['foto'];  
            h4 = document.getElementById("nombreDebajoDeFoto");
            h4.innerHTML = nombre + " " + apellido;
            localStorage.removeItem('IdProfesionalEnviada');
        }
    });
} else {
    return Swal.fire({
        icon: 'info',
        title: 'Aviso...',
        text: 'No se ha encontrado la oferta en nuestra base de datos',
        footer: ''
    })
}
}

function capitalize(word) {
    return word[0].toUpperCase() + word.slice(1);
  }