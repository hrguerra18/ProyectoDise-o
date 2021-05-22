function AdicionarOferta(){
    Cargo = $("#nombreCargo").value().trim();
    vigencia =  $("#vigenciaOferta").value().trim();
    numeroAplicantes = $("#numeroAplicantes").value().trim();
    descripcion =  $("#descripcion").value().trim();
    sector =  $("#sector").value().trim();
    tipoContrato =  $("#tipoContrato").value().trim();
    salario =  $("#salario").value().trim();
    horario =  $("#horario").value().trim();

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "Controles/ofertas.php",
        data: {
            accion: "adicionar",
            Cargo:Cargo,
            vigencia:vigencia,
            numeroAplicantes:numeroAplicantes,
            descripcion:descripcion,
            sector:sector,
            tipoContrato:tipoContrato,
            salario : salario,
            horario:horario,
        },
        success: function (resp) {
           
        }
    });

}