let boton = document.querySelector(".boton");

boton.addEventListener("click",(e)=>{

  e.preventDefault();
  let filtroOferta = document.getElementById("inputBuscarOferta").value;
  let tarjeta = document.querySelector(".row-filtros");
  let imagen = document.getElementById("imagen");
  let p = document.getElementById("p-index");
  var datos;

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
        alert(resp[0].foto)
        imagen.remove();
        p.remove();
        var datos = resp;
        var t;
        datos.forEach(elemento => {
          t = `<div class='row m-2 d-flex flex-wrap'>
            <div class='card mt-6 edit-tarjeta' style='width: 18rem;'>
               <div class='img-tarjeta'>
               <img src="${elemento.foto}"class='card-img-top img-tarjeta' alt='...'>
               </div>
               <div class='card-body'>
                   <h3 class='card-title  tamaño-fuente'>Cargo: ${elemento.cargo}</h3>
                   <h5 class='card-title  tamaño-fuente'>descirpcion: ${elemento.descripcion}</h5>
               </div>
               <ul class=list-group list-group-flush'>
                   <li class='list-group-item'>Salario: ${elemento.salario}</li>
                   <li class='list-group-item'>Condiciones: ${elemento.condicion}</li>
               </ul>
               <button data-id="${elemento.IDoferta}"  onclick='BuscarOferta();' type='button' class='btnModal color-tarjeta-a' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                   Ver mas
               </button>
           </div>
            </div>`;
            var div = document.createElement("DIV");
            div.innerHTML = t;
            tarjeta.appendChild(div);})

            $("#inputBuscarOferta").val()="";
      },
      
    });
  } else {
    alert("Ingrese algun valor de busqueda por favor!!");
  }
})




