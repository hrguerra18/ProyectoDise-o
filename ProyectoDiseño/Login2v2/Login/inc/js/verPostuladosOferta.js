$(document).ready(function () {
  ConsultarProfesionalesPostulados();
});

function ConsultarProfesionalesPostulados() {
  var tarjetas = document.querySelector(".tarjetasProfesionalesPostulados");
  var idOfertaRecibida = localStorage.getItem("idOfertaEnviada");

  $.ajax({
    type: "POST",
    dataType: "json",
    url: "Controles/VerPostuladosOferta.php",
    data: {
      accion: "consultarPostuladosOferta",
      idOfertaRecibida: idOfertaRecibida,
    },
    success: function (resp) {
        if(resp != ""){
            var datos = resp;
            // datos = JSON.parse(datos);
            // console.log(resp)
            datos.forEach((elemento) => {
              let t = crearTarjetaProfesionalPostulado(elemento);
              var div = document.createElement("DIV");
              div.innerHTML = t;
              tarjetas.appendChild(div);
            });
        }else{
            
            Swal.fire({
                icon: 'info',
                title: 'Aviso...',
                text: 'No se encuentran profesionales registrados a la oferta!',
                footer: ''
              })
            setTimeout(EnviarAHistorialEmpresa,3000);
           
        }
      
    },
  });
}

function crearTarjetaProfesionalPostulado(elemento) {
  tarjeta = `<div class='row m-2'>
                    <div class='card mb-5 tarjeta-historial-postulacionOfertas' style='width: 18rem;'>
                            <div class='img-tarjeta'>
                            <button class='activo'>Activo</button>
                            <img src=" ${elemento.foto} " class='card-img-top  foto-profesional' alt='...'>
                            </div>
                            <div class='card-body'>
                                <h6 class='card-title fw-bold tamaño-fuente'>${elemento.nombre}  ${elemento.apellido}</h6>
                                <h3 class='card-title  tamaño-fuente'>${elemento.sobreMi}</h3>
                            </div>
                            <ul class=list-group list-group-flush'>
                                <li class='list-group-item tamaño-fuente-salario'><b>Carrera:</b> ${elemento.carrera}</li>
                                <li class='list-group-item tamaño-fuente-salario'><b>Correo:</b> ${elemento.correo}</li>
                                <li class='list-group-item tamaño-fuente-salario'><b>Telefono:</b> ${elemento.telefono}</li>
                               
                            </ul>
                            <a href="mostrarInformacionProfesional.php" target="_blank" >
                            <div class=' mt-1'>
                            <button data-id="${elemento.Identidad}" onclick="EnviarIDProfesional(${elemento.Identidad})" type='button' class='btnModal boton-ver-postulados'>
                            Ver  informacion del profesional   
                        </button></a>
                        
                            </div>
                            
                        </div>
                   
                  
                        </div>`;

  return tarjeta;
}

function EnviarAHistorialEmpresa(){
  window.location = "historialEmpresa.php";
}

function EnviarIDProfesional(identidad){
  localStorage.setItem('IdProfesionalEnviada',identidad)
}