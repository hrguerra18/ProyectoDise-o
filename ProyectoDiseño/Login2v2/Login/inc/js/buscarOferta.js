let boton = document.querySelector(".boton");

$(document).ready(function(){
  ConsultarOfertasDeTrabajoindex();
});


boton.addEventListener("click", (e) => {
  let datoClases = recibirDatos();
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
        var datos = resp;     
        datoClases.tarjeta.innerHTML = "";
        datos.forEach((elemento) => {
          let t = crearTarjeta(elemento,datoClases.IdEmpresaOProfesional);
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
  var IdEmpresaOProfesional = document.getElementById("IdEmpresaOProfesional").value;
  

  clases = {
    filtroOferta: filtroOferta,
    tarjeta: tarjeta,
    IdEmpresaOProfesional : IdEmpresaOProfesional,
  };

  return clases;
}

function crearTarjeta(elemento,IdEmpresaOProfesional) {
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
               <div class="div-botonoes-index-profesional">
                  <input  onclick="RegistrarPostulacion(${elemento.IDoferta},${IdEmpresaOProfesional})" value="Postularme" type="button" class='botones-ofertas'>
           
                  <a href="mostrarInformacionEmpresa.php" target="_blank">
                    <button id="btn-info-empresa" onclick="EnviarIDempresa(${elemento.NITempresa})" type='button' class='botones-ofertas'>
                      Informacion de la empresa
                    </button>
                  </a>
               </div>
               
           </div>
            </div>`;
}


function EnviarIDempresa(NITempresa){
  localStorage.setItem('NITempresaEnviar',NITempresa)
}

function RegistrarPostulacion(IDoferta,IdEmpresaOProfesional) {
   if(NoPermitirDobleRegistro(IDoferta,IdEmpresaOProfesional)){
    $.ajax({
      type: "POST",
      dataType :"json",
      url : "Controles/buscarOfertas.php",
      data:{
        accion:"registrarPostulacion",
        IDoferta:IDoferta,
        IdEmpresaOProfesional:IdEmpresaOProfesional
      },
      success:function(resp){
        
        
          Swal.fire({
            icon: 'success',
            title: 'Postulado...',
            text: 'Usted se acaba de postular a esta vacante!',
            footer: ''
          })
      }
    })
   }else{
     Swal.fire({
      icon: 'warning',
      title: 'Cancelado...',
      text: 'Ya se encuentra registrado a esta oferta!',
      footer: ''
    })
   }
 
  
  
}

function NoPermitirDobleRegistro(IDoferta,IdEmpresaOProfesional){
  var retornar;
    $.ajax({
          type : "POST",
          dataType : "json",
          url : "Controles/buscarOfertas.php",
          async: false,
          data : {
            accion : "NoPermitirDobleRegistro",
            IDoferta:IDoferta,
            IdEmpresaOProfesional:IdEmpresaOProfesional
          },
          success : function(resp){
            retornar = resp['mensaje'];
          }
  })
return retornar;
}


function ConsultarOfertasDeTrabajoindex(){
  var tarjeta = document.querySelector(".row-filtros");
  var IdEmpresaOProfesional = document.getElementById("IdEmpresaOProfesional").value;
    $.ajax({
      type : "POST",
      dateType : "json",
      url : "Controles/buscarOfertas.php",
      data : {
        accion : "ConsultarTodasLasOfertas"
      },
      success : function(resp){
        var datos = resp;  
        datos = JSON.parse(datos);
        datos.forEach((elemento) => {
          var t = crearTarjeta(elemento,IdEmpresaOProfesional);
          var div = document.createElement("DIV");
          div.innerHTML = t;
          tarjeta.appendChild(div);
          
        });
      }
    });
   
  }
  
