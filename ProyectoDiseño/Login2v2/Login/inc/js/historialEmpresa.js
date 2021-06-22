// $(document).ready(function(){
//     ConsultarOfertasPostuladas();
// });

window.onload = ConsultarOfertasPostuladas;

var idEmpresa = document.querySelector(".idEmpresa");
var tarjetas = document.querySelector(".tarjetas");

function ConsultarOfertasPostuladas(){
    if(idEmpresa.value != ""){
        $.ajax({
            type : "POST",
            dateType : "json",
            url : "Controles/historialEmpresa.php",
            data : {
                accion : "consultarOfertas",
                idEmpresa : idEmpresa.value
            },
            success : function(resp){
                
                datos = resp;
                 datos = JSON.parse(datos);
                console.log(datos)
                datos.forEach((elemento) => {
                    let t = crearTarjetaHistorial(elemento);
                    var div = document.createElement("DIV");
                    div.innerHTML = t;
                    tarjetas.appendChild(div);
                  });
            }
        })
    }
}



function crearTarjetaHistorial(elemento){
    tarjeta = `<div class='row m-2 '>
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
                                
                              
                                <li class='list-group-item tamaño-fuente-salario'><b>Maximo de aplicantes:</b> ${elemento.numeroAplicantes}</li>
                            </ul>
                            <a href="verPostuladosOferta.php">
                            <div class=' mt-1'>
                            <button data-id="${elemento.IDoferta}"   onclick='agregarDatoLocal(${elemento.IDoferta});' type='button' class='btnModal boton-ver-postulados'>
                            Ver  postulados    
                        </button></a>
                        <a href="informacionOferta.php">
                        <button data-id=" ${elemento.IDoferta}"  onclick='agregarDatoLocal(${elemento.IDoferta});' type='button' class='btnModal boton-ver-postulados'>
                            Modificar    
                        </button></a>
                            </div>
                        </div>
                        </div>`;
     return tarjeta
}

function agregarDatoLocal(idOferta){
    localStorage.setItem('idOfertaEnviada', idOferta);
}

