$(document).ready(function(){
    ConsultarUltimaOferta();
})

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
    
    fechaHoy = hoyFecha();
    
 
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
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Confirmado...",
                        text: "La oferta se creo correctamente",
                        showConfirmButton: false,
                        timer: 2500,
                      });
                      setInterval(RecargarOfertas,2700)
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

function ConsultarUltimaOferta(){
    let nitEmpresa = document.getElementById("nitempresaOferta").value;
    let tarjetas = document.querySelector(".ultima-oferta");
    
    $.ajax({
        type : "POST",
        dateType : "json",
        url : "Controles/ofertas.php",
        data : {
            accion : "consultarOfertas",
            nitEmpresa:nitEmpresa
        },
        success : function(resp){
            
            datos = resp;
             datos = JSON.parse(datos);
            console.log(datos)
            
                let t = crearTarjetaUltimaOferta(datos[0]);
                var div = document.createElement("DIV");
                div.innerHTML = t;
                tarjetas.appendChild(div);
              
        }
    })
}

function crearTarjetaUltimaOferta(elemento){
    tarjeta = `<div class='row m-2 '>
    <div class='card mb-5 tarjeta-historial-empresa' style='width: 18rem;'>
            <div class='img-tarjeta'>
            <input class='activo'id="eliminar-oferta" type="button" value="Eliminar oferta" onclick="EliminarOfertaCreada(${elemento.IDoferta})">
            <img src=" ${elemento.foto} " class='card-img-top img-tarjeta' alt='...'>
            </div>
            <div class='card-body'>
                <h6 class='card-title fw-bold tamaño-fuente'>Cargo:  ${elemento.cargo} </h6>
                <h3 class='card-title  tamaño-fuente'>${elemento.descripcion}</h3>
            </div>
            <ul class=list-group list-group-flush'>
            <li class='list-group-item tamaño-fuente-salario'><b>Aplicantes:</b> ${elemento.numeroAplicantes}</li>
                <li class='list-group-item tamaño-fuente-salario'><b>Salario:</b> ${elemento.salario}</li>
                <li class='list-group-item tamaño-fuente-salario'><b>Vigencia:</b> ${elemento.vigencia}</li>
                <li class='list-group-item tamaño-fuente-salario'><b>Sector:</b> ${elemento.sector}</li>
                <li class='list-group-item tamaño-fuente-salario'><b>Maximo de aplicantes:</b> ${elemento.numeroAplicantes}</li>
            </ul>
            
            
        </div>
        </div>`;
return tarjeta
}

function EliminarOfertaCreada(IDoferta){
    validar = confirm("Esta seguro que quiere eliminar la oferta?")
    if(validar){
        $.ajax({
            type : "POST",
            dateType : "json",
            url : "Controles/ofertas.php",
            data : {
                accion : "eliminarOferta",
                IDoferta:IDoferta
            },
            success : function(resp){
                mensaje = JSON.parse(resp);
                if(mensaje.mensaje = "Se elimino correctamente"){
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Confirmado...",
                        text: "Se elimino correctamente la oferta",
                        showConfirmButton: false,
                        timer: 2500,
                      });
                      setInterval(RecargarOfertas,2700)
                }
                
               
                  
            }
        })
    }
    
}
