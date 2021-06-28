$(document).ready(function () {
    ConsultarOfertaInformacionOferta();
});


function ConsultarOfertaInformacionOferta() {
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
                $("#sectorOferta").val(resp[0]['sector']);
                $("#contratoOferta").val(resp[0]['tipoContrato']);
                $("#salarioOferta").val(resp[0]['salario']);
                $("#horarioOferta").val(resp[0]['horario']);
                $("#nitEmpresa").val(resp[0]['NITempresa']);
                $("#estadoOferta").val(resp[0]['estadoOferta']);
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

function ModificarInformacionOfertaHistorialEmpresa(){
    var NIT = document.getElementById("nitEmpresa").value;
    var Cargo = document.getElementById("cargoOferta").value;
    var vigencia = document.getElementById("vigenciaOferta").value;
    var numeroAplicantes = document.getElementById("aplicantesOferta").value;
    var descripcion = document.getElementById("descripcionOferta").value;
    var sector = document.getElementById("sectorOferta").value;
    var tipoContrato = document.getElementById("contratoOferta").value;
    var salario = document.getElementById("salarioOferta").value;
    var horario = document.getElementById("horarioOferta").value;
    var condiciones = document.getElementById("condicionesOferta").value;
    var IDoferta = document.getElementById("idOferta").value;
    var estado =  document.getElementById("estadoOferta").value;

    fechaHoy = hoyFechaInformacionOferta();

    if(vigencia >= fechaHoy){
        if(numeroAplicantes > 0){
            $.ajax({
                type: "POST",
                dataType: 'json',
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
                    if(resp.mensaje == "Se modifico"){
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Confirmado...",
                            text: "La oferta se modifico correctamente",
                            showConfirmButton: false,
                            timer: 2500,
                        });
                        setInterval(RecargarInformacionOferta,2500)
                    }
                    
                }
            });
        }else{
            Swal.fire({
                icon: "error",
                title: "Error...",
                text: "El numero de aplicantes tiene que ser mayor a cero",
                showConfirmButton: false,
                timer: 2500,
            });
            setInterval(RecargarInformacionOferta,2500)
        }
        
    }else{
        Swal.fire({
            icon: "error",
            title: "Error...",
            text: "La vigencia que quiere introducir no se puede",
            showConfirmButton: false,
            timer: 2500,
        });
        setInterval(RecargarInformacionOferta,2500)
    }
    
    
    
}

function RecargarInformacionOferta(){
    window.location = "informacionOferta.php";
}

function hoyFechaInformacionOferta(){
    var hoy = new Date();
        var dd = hoy.getDate();
        var mm = hoy.getMonth()+1;
        var yyyy = hoy.getFullYear();
        
        dd = addZeroInformacionOferta(dd);
        mm = addZeroInformacionOferta(mm);

        return yyyy+'-'+mm+'-'+dd;
}

function addZeroInformacionOferta(i) {
    if (i < 10) {
        i = '0' + i;
    }
    return i;
}