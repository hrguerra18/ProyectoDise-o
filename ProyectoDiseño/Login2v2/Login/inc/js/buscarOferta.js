let boton = document.querySelector(".boton");


boton.addEventListener("click", (e) => {
  let datoClases = recibirDatos();

  console.log(datoClases.filtroOferta);
  if (datoClases.filtroOferta != "") {
    console.log("entro")
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "Controles/buscarOfertas.php",
      data: {
        accion: "buscar",
        filtroOferta: datoClases.filtroOferta,
      },
      success: function (resp) {
        console.log(resp[0])
       if(datoClases.imagen !=null && datoClases.p !=null){
        removerImagenYParrafo(datoClases)
       }
        var datos = resp;
        console.log(datos);
        let t;
        datoClases.tarjeta.innerHTML="";
        datos.forEach((elemento) => {
          t = crearTarjeta(elemento);
          var div = document.createElement("DIV");
          div.innerHTML = t;
          datoClases.tarjeta.appendChild(div);
          document.querySelector("input").value = "";
         
        });
      },
    });
    e.preventDefault();
  } 
  
});

function recibirDatos() {
  let filtroOferta = document.getElementById("inputBuscarOferta").value;
  let tarjeta = document.querySelector(".row-filtros");
  let imagen = document.getElementById("imagen");
  let p = document.getElementById("p-index");

  clases = {
    filtroOferta: filtroOferta,
    tarjeta: tarjeta,
    imagen: imagen,
    p: p,
  };

  return clases;
}

function crearTarjeta(elemento) {
  return `<div class='row  d-flex flex-wrap'>
            <div class='card mt-3 mb-3 edit-tarjeta-profesional' '>
               <div class='img-tarjeta mb-7'>
               <img src="${elemento.foto}"class='card-img-top img-tarjeta-profesional' alt='...'>
               </div>
               <div class='  div-cargo'>
                   <h2 class='card-title  tamaño-fuente'><b>Cargo:</b> ${elemento.cargo}</h2>
                   <h5 class='card-title  tamaño-fuente'><b>Descripcion:</b> ${elemento.descripcion}</h5>
               </div>
               <ul class='list-group list-group-flush info-oferta'>
                  <li class='list-group-item'><b>Empresa:</b> ${elemento.nombre}</li>
                   <li class='list-group-item'><b>Salario:</b> ${elemento.salario}</li>
                   <li class='list-group-item'><b>Vigencia:</b> ${elemento.vigencia}</li>
                   <li class='list-group-item'><b>Numero aplicantes:</b> ${elemento.numeroAplicantes}</li>
                   <li class='list-group-item'><b>Sector:</b> ${elemento.sector}</li>
                   <li class='list-group-item'><b>Horario:</b> ${elemento.horario}</li>
                   <li class='list-group-item'><b>Condiciones:</b> ${elemento.condicion}</li>
               </ul>
               <button data-id="${elemento.IDoferta}"  onclick='BuscarOferta();' type='button' class='btnModal color-tarjeta-a' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                   Ver mas
               </button>
           </div>
            </div>`;
}

function removerImagenYParrafo(datoClases) {
    datoClases.imagen.remove();
    datoClases.p.remove();
}
