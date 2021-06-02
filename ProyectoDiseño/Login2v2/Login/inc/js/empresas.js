function AdicionarEmpresa() {

    var NIT = $("#Nitempresa").val();
    var foto = $("#fotoempresa").val();
    var nombre = $("#nombreempresa").val();
    var servicio = $("#servicioempresa").val();
    var direccion = $("#direccionempresa").val();
    var telefono = $("#telefonoempresa").val();
    var correo = $("#emailempresa").val();
    var contraseña = $("#contraseñaempresa").val();
    alert(NIT);
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
            limpiar();
        }
    });
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