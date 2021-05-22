

function AdicionarProfesional() {
    alert("Entro");

    var identidad = $("#identidad").val();
    var foto = $("#foto").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var correo = $("#email").val();
    var contraseña = $("#contraseña").val();
    alert("Entro");

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
           
        }
    });
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