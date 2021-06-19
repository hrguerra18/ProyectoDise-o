$(document).ready(function(){
    ConsultarOfertasPostuladas();
    
});

var idEmpresa = document.querySelector(".idEmpresa").value;
var tarjetas = document.querySelector(".tarjetas");

function ConsultarOfertasPostuladas(){
    if(idEmpresa != ""){
        $.ajax({
            type : "POST",
            dateType : "json",
            url : "Controles/historialEmpresa.php",
            data : {
                accion : "consultarOfertas",
                idEmpresa : idEmpresa
            },
            success : function(resp){
                
                var datos = resp;
                datos = JSON.parse(datos);
                console.log(resp)
                datos.forEach((elemento) => {
                    let t = crearTarjeta(elemento);
                    var div = document.createElement("DIV");
                    div.innerHTML = t;
                    tarjetas.appendChild(div);
                  });
            }
        })
    }
}



function crearTarjeta(elemento){
    tarjeta = `<div class='row m-2'>
                    <div class='card mb-5 tarjeta-historial-empresa' style='width: 18rem;'>
                            <div class='img-tarjeta'>
                            <button class='activo'>Activo</button>
                            <img src=" ${elemento.foto} " class='card-img-top img-tarjeta' alt='...'>
                            </div>
                            <div class='card-body'>
                                <h6 class='card-title fw-bold tamaño-fuente'>Cargo:  ${elemento.cargo} </h6>
                                <h3 class='card-title  tamaño-fuente'>${elemento.descripcion}</h3>
                            </div>
                            <ul class=list-group list-group-flush'>
                                <li class='list-group-item tamaño-fuente-salario'><b>Salario:</b> ${elemento.salario}</li>
                                <li class='list-group-item tamaño-fuente-salario'><b>Sector:</b> ${elemento.sector}</li>
                                <li class='list-group-item tamaño-fuente-salario'><b>Tipo de contrato:</b> ${elemento.tipoContrato}</li>
                                <li class='list-group-item tamaño-fuente-salario'><b>Maximo de aplicantes:</b> ${elemento.numeroAplicantes}</li>
                            </ul>
                            <button data-id=" . $row["IDoferta"] . "  onclick='BuscarOferta();' type='button' class='btnModal boton-ver-postulados'>
                                Ver  postulados    
                            </button>
                        </div>
                   
                  
                        </div>`;

                        return tarjeta
}

