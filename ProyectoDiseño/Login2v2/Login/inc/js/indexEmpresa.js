window.onload = CargarFunciones;

function CargarFunciones(){
    ConsultarProfesionalesEnIndex();
    ConsultarOfertasPostuladas();
}

function ConsultarProfesionalesEnIndex() {
    let tarjetas = document.querySelector(".cargar-tarjetas-profesional")
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "Controles/indexEmpresa.php",
    data: {
      accion: "cosultarProfesionalesIndex",
    },
    success: function (resp) {
        datos = resp;
        
       console.log(datos)
       datos.forEach((elemento) => {
           let t = crearTarjetaProfesionalesIndex(elemento);
           var div = document.createElement("DIV");
           div.innerHTML = t;
           tarjetas.appendChild(div);
         });
    },
  });
}

function crearTarjetaProfesionalesIndex(elemento){
    tarjeta = `<div class=' m-2 '>
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
               
        
            <a href="indexMostrarProfesional.php" target="_blank" >
            <div class=' mt-1'>
            <button data-id="${elemento.Identidad}" onclick="EnviarIDProfesionalIndex(${elemento.Identidad})" type='button' class='btnModal boton-ver-postulados'>
            Ver  informacion del profesional   
        </button></a>
            </div>
            
        </div>
   
  
        </div>`;

return tarjeta;
}

function EnviarIDProfesionalIndex(Identidad){
    localStorage.setItem('idprofesionalIndex', Identidad);
}