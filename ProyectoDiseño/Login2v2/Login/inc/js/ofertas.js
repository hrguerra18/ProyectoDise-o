
function AdicionarOferta() {
    var NIT = $("#nitempresaOferta").val().trim();
    var Cargo = $("#nombreCargo").value().trim();
    var vigencia = $("#vigenciaOferta").value().trim();
    var numeroAplicantes = $("#numeroAplicantes").value().trim();
    var descripcion = $("#descripcion").value().trim();
    var sector = $("#sector").value().trim();
    var tipoContrato = $("#tipoContrato").value().trim();
    var salario = $("#salario").value().trim();
    var horario = $("#horario").value().trim();
    var condiciones = $("#condiciones").val().trim();
    var checkBoxpracticante = document.getElementById("practicante");
    var checkBoxtecnico = document.getElementById("tecnico");
    var checkBoxtecnologo = document.getElementById("tecnologo");
    var checkBoxprofesional = document.getElementById("profesional");
    var checkBoxpostgrado = document.getElementById("postgrado");
    var checkBoxespecializacion = document.getElementById("especializacion");
    var checkBoxmaestria = document.getElementById("maestria");
    var checkBoxdoctorado = document.getElementById("doctorado");
    var checkBoxcualquiera = document.getElementById("cualquiera");
    alert(NIT);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/ofertas.php",
        data: {
            accion: "adicionar",
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
            checkBoxpracticante:checkBoxpracticante,
            checkBoxtecnico:checkBoxtecnico,
            checkBoxtecnologo:checkBoxtecnologo,
            checkBoxprofesional:checkBoxprofesional,
            checkBoxpostgrado:checkBoxpostgrado,
            checkBoxespecializacion: checkBoxespecializacion,
            checkBoxmaestria:checkBoxmaestria,
            checkBoxdoctorado:checkBoxdoctorado,
            checkBoxcualquiera:checkBoxcualquiera,
        },
        success: function (resp) {

        }
    });

}