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
    
    alert(vigencia);

    fechaHoy = hoyFecha();
    alert(fechaHoy)
 
    // var checkBoxpracticante = document.getElementById("practicante");
    // var checkBoxtecnico = document.getElementById("tecnico");
    // var checkBoxtecnologo = document.getElementById("tecnologo");
    // var checkBoxprofesional = document.getElementById("profesional");
    // var checkBoxpostgrado = document.getElementById("postgrado");
    // var checkBoxespecializacion = document.getElementById("especializacion");
    // var checkBoxmaestria = document.getElementById("maestria");
    // var checkBoxdoctorado = document.getElementById("doctorado");
    // var checkBoxcualquiera = document.getElementById("cualquiera");
    
    if(numeroAplicantes > 0){
        if(vigencia > fechaHoy){
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "Controles/ofertas.php",
                data: {
                    accion:"adicionar",
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
                    fechaHoy,fechaHoy
                },
                success: function (resp) {
                }
            });
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Error...',
                text: 'La fecha de vigencia no puede ser menor a la actual!',
                footer: ''
              })
              setInterval(RecargarOfertas,2700)
        }
       
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Error...',
            text: 'La cantidad minima de aplicantes es 1!',
            footer: ''
          })
          setInterval(RecargarOfertas,2700)
    }
    
    
}

function RecargarOfertas(){
    window.location = "crearOferta.php";
}

function hoyFecha(){
    var hoy = new Date();
        var dd = hoy.getDate();
        var mm = hoy.getMonth()+1;
        var yyyy = hoy.getFullYear();
        
        dd = addZero(dd);
        mm = addZero(mm);

        return yyyy+'-'+mm+'-'+dd;
}

function addZero(i) {
    if (i < 10) {
        i = '0' + i;
    }
    return i;
}
