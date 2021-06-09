let boton = document.getElementById("botonBuscarOferta");

boton.addEventListener("click", () => {
  let filtroOferta = document.getElementById("inputBuscarOferta").value;
  let tarjeta = document.querySelector(".row-filtros");
  let imagen = document.getElementById("imagen");

  if (filtroOferta != "") {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: "Controles/buscarOfertas.php",
      data: {
        accion: "buscar",
        filtroOferta: filtroOferta,
      },
      success: function (resp) {
        alert(resp[0].salario);
        var t;
        fragment = document.createDocumentFragment();

        for(i=0; i<2;i++){
            t = `<div class='row'>
            <div class='card mt-6 edit-tarjeta' style='width: 18rem;'>
               <div class='img-tarjeta'>
               <img src="${resp[i].foto}"class='card-img-top img-tarjeta' alt='...'>
               </div>
               <div class='card-body'>
                   <h3 class='card-title fw-bold tamaño-fuente'>Cargo: "${resp[i].cargo}"</h3>
                   <h3 class='card-title fw-bold tamaño-fuente'>descirpcion: "${resp[i].descripcion}"</h3>
               </div>
               <ul class=list-group list-group-flush'>
                   <li class='list-group-item'>Salario: "${resp[i].salario}"</li>
                   <li class='list-group-item'>Condiciones: "${resp[i].condicion}"</li>
               </ul>
               <button data-id="${resp[i].IDoferta}"  onclick='BuscarOferta();' type='button' class='btnModal color-tarjeta-a' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                   Ver mas
               </button>
           </div>
            </div>`;
            var div = document.createElement("DIV");
            div.innerHTML = t;
            fragment.appendChild(div);
        }
        padre = imagen.parentNode;
        padre.removeChild(imagen);

        tarjeta.appendChild(fragment);
      }
    });
    
  } else {
    alert("Ingrese algun valor de busqueda por favor!!");
  }
});
