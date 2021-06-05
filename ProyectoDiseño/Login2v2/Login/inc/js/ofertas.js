function AdicionarOferta() {
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
    // var checkBoxpracticante = document.getElementById("practicante");
    // var checkBoxtecnico = document.getElementById("tecnico");
    // var checkBoxtecnologo = document.getElementById("tecnologo");
    // var checkBoxprofesional = document.getElementById("profesional");
    // var checkBoxpostgrado = document.getElementById("postgrado");
    // var checkBoxespecializacion = document.getElementById("especializacion");
    // var checkBoxmaestria = document.getElementById("maestria");
    // var checkBoxdoctorado = document.getElementById("doctorado");
    // var checkBoxcualquiera = document.getElementById("cualquiera");
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
        },
        success: function (resp) {

        }
    });
}

function BuscarOferta() {
    $(".btnModal").click(function () {

        IDoferta = $(this).data("id");
        //console.log(idcliente);
        alert("Entro");
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "Controles/ofertas.php",
            data: {
                accion: 'BuscarOferta',
                IDoferta: IDoferta,
            },
            success: function (resp) {


            }
        });



    });

}