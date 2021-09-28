$(document).ready(function(){
    ConsultarUltimaOferta();
})

function AdicionarOferta() {
    alerta = document.querySelector(".alerta");
    var NIT = $("#nitempresaOferta").val()
    var Cargo = $("#nombreCargo").val()
    var vigencia = $("#vigenciaOferta").val()
    var numeroAplicantes = $("#numeroAplicantes").val()
    var descripcion = $("#descripcion").val()
    var sector = $("#sector").val()
    var tipoContrato = $("#tipoContrato").val()
    var salario = $("#salario").val()
    var horario = $("#horario").val()
    var condiciones = $("#condiciones").val()
    var IDoferta = $("#IDoferta").val();
    let validarDatos = ValidarCrearOferta(Cargo,vigencia,numeroAplicantes,descripcion,sector,tipoContrato,salario,horario,condiciones)
    fechaHoy = hoyFecha();
    
    if(validarDatos[0]){
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
            mensaje("La fecha de vigencia tiene que se mayor a a la actual")
        }
       
    }else{
        mensaje(validarDatos[1]);
    }
    
    
}

const mensaje = (mensaje)=>{
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: mensaje,
        footer: ''
      }).then((result) =>{
        // if (result.isConfirmed) {
        //     window.location = "registrarProfesional.php"
        // }
    })
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
                mensajeResp = JSON.parse(resp);
                if(mensajeResp.mensaje = "Se elimino correctamente"){
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
