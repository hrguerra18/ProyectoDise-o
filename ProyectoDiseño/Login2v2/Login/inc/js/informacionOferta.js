$(document).ready(function () {
    ConsultarOferta();
});


function ConsultarOferta() {
    var idOfertaRecibida = localStorage.getItem("idOfertaEnviada");
    if (idOfertaRecibida != "") {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "Controles/informacionOferta.php",
            data: {
                accion: "BuscarOferta",
                idOfertaRecibida: idOfertaRecibida,
            },
            success: function (resp) {
                $("#cargoOferta").val(resp[0]['cargo']);
                $("#vigenciaOferta").val(resp[0]['vigencia']);
                $("#idOferta").val(resp[0]['IDoferta']);
                $("#aplicantesOferta").val(resp[0]['numeroAplicantes']);
                $("#sectorOferta").val(resp[0]['secrtor']);
                $("#contratoOferta").val(resp[0]['tipoContrato']);
                $("#salarioOferta").val(resp[0]['salario']);
                $("#horarioOferta").val(resp[0]['horario']);
                $("#nitEmpresa").val(resp[0]['NITempresa']);
                $("#estadoOferta").val(resp[0]['estado']);
                $("#condicionesOferta").val(resp[0]['condicion']);
                $("#descripcionOferta").val(resp[0]['descripcion']);
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

function ModificarInformacionOferta(){

    var NIT = $("#niteEmpresa").val().trim();
    var Cargo = $("#cargoOferta").val().trim();
    var vigencia = $("#vigenciaOferta").val().trim();
    var numeroAplicantes = $("#aplicantesOferta").val().trim();
    var descripcion = $("#descripcionOferta").val().trim();
    var sector = $("#sectorOferta").val().trim();
    var tipoContrato = $("#contratoOferta").val().trim();
    var salario = $("#salarioOferta").val().trim();
    var horario = $("#horarioOferta").val().trim();
    var condiciones = $("#condicionesOferta").val().trim();
    var IDoferta = $("#idOferta").val();
    var estado =  $("#estadoOferta").val().trim();
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/informacionOferta.php",
        data: {
            accion:"Modificar",
            Cargo: Cargo,
            vigencia: vigencia,
            numeroAplicantes: numeroAplicantes,
            descripcion: descripcion,
            sector: sector,
            tipoContrato: tipoContrato,
            salario: salario,
            horario: horario,
            condiciones: condiciones,
            NIT: NIT,
            IDoferta: IDoferta,
            estado : estado,
        },
        success: function (resp) {
            datos = JSON.parse(resp);
            return Swal.fire({
                icon: 'info',
                title: 'Aviso...',
                text: datos.mensaje,
                footer: ''
            })
        }
    });
    debugger
}