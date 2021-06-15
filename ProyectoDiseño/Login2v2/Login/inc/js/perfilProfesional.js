function ModificarPerfil(){
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
        }
    })
    
}