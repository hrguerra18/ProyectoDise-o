$(document).ready(function () {
  ConsultarOfertasALasQueMePostule();
});

function ConsultarOfertasALasQueMePostule() {
  let idProfesional = document.getElementById("idProfesional").value;
  var divTarjetas = document.querySelector(".tarjetaVerOfertasAlasQueMePostule");
  var divTextoUno = document.querySelector(".texto-1");


  if (idProfesional != "") {
    $.ajax({
      type: "POST",
      dateType: "json",
      url: "Controles/historialProfesional.php",
      data: {
        accion: "consultarOfertas",
        idProfesional: idProfesional,
      },
      success: function (resp) {
        var datos = resp;
        datos = JSON.parse(datos);
        console.log(datos)
        textoUno = `<h2>Aqui se encuentran todos tus registros a postulaciones de ofertas</h2>`;
        divTextoUno.innerHTML = textoUno;
        datos.forEach((elemento) => {
          let t = crearTarjetaOfertaALaQueMePostule(elemento);
          var div = document.createElement("DIV");
          div.innerHTML = t;
          divTarjetas.appendChild(div);
        });
      },
    });
  }
}

function ConsultarPostulacionesHistorialProfesional(){
  let dato = document.getElementById("seleccionarFiltro").value;
  let idProfesional = document.getElementById("idProfesional").value;
  var divTarjetas2 = document.querySelector(".tarjetaVerOfertasAlasQueMePostule");
  var divTextoUno = document.querySelector(".texto-1");
  

  if(dato == "todas"){  accion = "consultarOfertas"; }
  if(dato == "En espera"){  accion = "consultarActivasOInactivas"; }
  if(dato == "Aceptado"){  accion = "consultarActivasOInactivas";}
  if(dato == "Cancelada"){  accion = "consultarActivasOInactivas";}

  
  $.ajax({
    type: "POST",
    dateType: "json",
    url: "Controles/historialProfesional.php",
    data: {
      accion: accion,
      idProfesional: idProfesional,
      dato : dato
    },
    success: function (resp) {
      var datos = JSON.parse(resp);
      console.log(datos)
      textoUno = `<h2>Aqui se encuentran todos tus registros a postulaciones de ofertas</h2>`;
      divTextoUno.innerHTML = textoUno;
      divTarjetas2.innerHTML="";
      datos.forEach((elemento) => {
        let t = crearTarjetaOfertaALaQueMePostule(elemento);
        var div = document.createElement("DIV");
        div.innerHTML = t;
        divTarjetas2.appendChild(div);
      });
    },
  });
  
}

function crearTarjetaOfertaALaQueMePostule(elemento) {
  tarjeta = `<div class='row m-2'>
    <div class='card mb-5 tarjeta-historial-profesional' style='width: 18rem;'>
            <div class='img-tarjeta'>
            <button class='activo' id="boton-estado"  onclick="EliminarOferta(${elemento.idOferta},${elemento.idProfesional})">${ConsultarEstado(elemento.idOferta,elemento.idProfesional)}</button>
            <img src=" ${elemento.foto} " class='card-img-top img-tarjeta' alt='...'>
            </div>
            <div class='card-body'>
                <h6 class='card-title fw-bold tamaño-fuente'>Cargo:  ${elemento.cargo} </h6>
                <h3 class='card-title  tamaño-fuente'>${elemento.descripcion}</h3>
            </div>
            <ul class=list-group list-group-flush'>
                <li class='list-group-item tamaño-fuente-salario'><b>Salario:</b> ${elemento.salario}</li>
                <li class='list-group-item tamaño-fuente-salario'><b>Contrato:</b> ${elemento.tipoContrato}</li>
                <li class='list-group-item tamaño-fuente-salario'><b>Vigencia:</b> ${elemento.vigencia}</li>
              
                <li class='list-group-item tamaño-fuente-salario'><b>Empresa:</b> ${elemento.nombre}</li>
            </ul>
            <a href="verPostuladosOferta.php">
           
        </div>
        </div>`;
  return tarjeta;
}

function EliminarOferta(idOferta, idProfesional) {
    let botonEstado = document.getElementById("boton-estado");
    valor = ConsultarEstado(idOferta,idProfesional);
    
    if(valor == "En espera" || valor == "Aceptada"){
      let confirmacion = confirm("Seguro que quieres eliminar esta oferta");
      if (confirmacion) {
        botonEstado.classList.remove("activo");
        botonEstado.classList.add("inactivo");
        $.ajax({
          type: "POST",
          dateType: "json",
          url: "Controles/historialProfesional.php",
          async : false,
          data: {
            accion: "eliminarPostulacion",
            idOferta: idOferta,
            idProfesional: idProfesional,
          },
          success: function (resp) {
             
            
            location.reload()
        },
        });
    
      }
    }else{
      Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: 'No se puede eliminar una oferta que ya esta inactiva!',
        footer: ''
      })
    }
        
  
  
}


function ConsultarEstado(idOferta,idProfesional){
    var retornar;
    $.ajax({
        type: "POST",
        url: "Controles/historialProfesional.php",
        async : false,
        data: {
          accion: "consultarEstado",
          idOferta: idOferta,
          idProfesional : idProfesional,
        },
        success : function(resp){
          retornar = resp;
        }
      })
      return retornar;
}