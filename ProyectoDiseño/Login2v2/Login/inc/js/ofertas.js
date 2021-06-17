function AdicionarOferta() {
    alerta = document.querySelector(".alerta");
    var NIT = $("#nitempresaOferta").val().trim();
    var Cargo = $("#nombreCargo").val().trim();
    var vigencia = $("#vigenciaOferta").val().trim();
    var numeroAplicantes = $("#numeroAplicantes").val().trim();
    var descripcion = $("#descripcion").val().trim();
    var sector = $("#sector").val().trim();
    var tipoContrato = $("#tipoContrato").val().trim();
    var salario = $("#salario").val().trim();
    var horario = $("#horario").val().trim();
    var condiciones = $("#condiciones").val().trim();
    var IDoferta = $("#IDoferta").val();
    // var checkBoxpracticante = document.getElementById("practicante");
    // var checkBoxtecnico = document.getElementById("tecnico");
    // var checkBoxtecnologo = document.getElementById("tecnologo");
    // var checkBoxprofesional = document.getElementById("profesional");
    // var checkBoxpostgrado = document.getElementById("postgrado");
    // var checkBoxespecializacion = document.getElementById("especializacion");
    // var checkBoxmaestria = document.getElementById("maestria");
    // var checkBoxdoctorado = document.getElementById("doctorado");
    // var checkBoxcualquiera = document.getElementById("cualquiera");
    

    if (IDoferta === "") {
        var accion = "adicionar";
    } else {
        var accion = "Modificar";
    }

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/ofertas.php",
        data: {
            accion:accion,
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
        },
        success: function (resp) {
        }
    });
    
}

function BuscarOferta() {
    $(".btnModal").click(function () {
        IDoferta = $(this).data("id");
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "Controles/ofertas.php",
            data: {
                accion: "BuscarOferta",
                IDoferta: IDoferta,
            },
            success: function (resp) {
                $("#IDoferta").val(resp[0]['IDoferta']);
                $("#CargoOferta").val$("#CargoOferta").val() + "" + (resp[0]['cargo']);
            }
        });
    });

}

function ModificarOferta(){
    var IDoferta = $("#IDoferta").val();
    alert(Modifico);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/ofertas.php",
        data: {
            accion: "BuscarOferta",
            IDoferta: IDoferta,
        },
        success: function (resp) {
            $("#IDoferta").val(resp[0]['IDoferta']);
            $("#nombreCargo").val(resp[0]['cargo']).trim();
        }
    });
}