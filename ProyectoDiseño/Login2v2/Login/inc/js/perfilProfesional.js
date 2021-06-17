
$(document).ready(function () {
    ConsultarPerfilProfesional();
});


function ConsultarPerfilProfesional() {
    var identidad = document.getElementById("identidadProfesional").value;
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/perfilProfesional.php",
        data: {
            accion: "consultarperfil",
            identidad: identidad,
        },
        success: function (resp) {
            console.log(resp)
            $("#carreraProfesional").val(resp[0]['carrera']);
            $("#fechaNacimientoProfesional").val(resp[0]['fechaNacimiento']);
            $("#correoProfesional").val(resp[0]['correo']);
            $("#nombreProfesional").val(resp[0]['nombre']);
            $("#apellidoProfesional").val(resp[0]['apellido']);
            $("#sobreMiProfesional").val(resp[0]['sobreMi']);
            $("#direccionProfesional").val(resp[0]['direccion']);
            $("#telefonoProfesional").val(resp[0]['telefono']);
            $("#departamentoProfesional").val(resp[0]['departamentoProfesional']);
            $("#ciudadProfesional").val(resp[0]['ciudadProfesional']);
        }
    });
}




function ModificarPerfilProfesional(){
    let identidad = document.getElementById("identidadProfesional").value.trim();
    let carreraProfesional = document.getElementById("carreraProfesional").value.trim();
    let fechaNacimientoProfesional = document.getElementById("fechaNacimientoProfesional").value.trim();
    let nombreProfesional = document.getElementById("nombreProfesional").value.trim();
    let apellidoProfesional = document.getElementById("apellidoProfesional").value.trim();
    let sobreMiProfesional = document.getElementById("sobreMiProfesional").value.trim();
    let direccionProfesional = document.getElementById("direccionProfesional").value.trim();
    let telefonoProfesional = document.getElementById("telefonoProfesional").value.trim();
    let departamentoProfesional = document.getElementById("departamentoProfesional").value.trim();
    let ciudadProfesional = document.getElementById("ciudadProfesional").value.trim();

    $.ajax({
        type : "POST",
        dataType : "json",
        url : "Controles/perfilProfesional.php",
        data :{
            accion : "modificar",
            identidad : identidad,
            carreraProfesional : carreraProfesional,
            fechaNacimientoProfesional : fechaNacimientoProfesional,
            nombreProfesional : nombreProfesional,
            apellidoProfesional : apellidoProfesional,
            sobreMiProfesional : sobreMiProfesional,
            direccionProfesional : direccionProfesional,
            telefonoProfesional : telefonoProfesional,
            departamentoProfesional : departamentoProfesional,
            ciudadProfesional : ciudadProfesional,
        },
        success : function(resp) {
            alert("se guardo correctamente");
            ConsultarPerfilProfesional();
        }
    })
    
}