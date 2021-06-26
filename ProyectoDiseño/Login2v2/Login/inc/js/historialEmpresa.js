// $(document).ready(function(){
//     ConsultarOfertasPostuladas();
// });

// window.onload = ConsultarOfertasPostuladas;

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
                            <input class='activo'id="eliminar-oferta" type="button" value="${ConsultarEstadoOferta(elemento.IDoferta)}" onclick="EliminarOfertaLadoEmpresa(${elemento.IDoferta})">
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

function EliminarOfertaLadoEmpresa(IDoferta){
    let botonEstado = document.getElementById("eliminar-oferta");
    valor = ConsultarEstadoOferta(IDoferta);
    
    if(valor == "Activo"){
      let confirmacion = confirm("Seguro que quieres eliminar esta oferta");
      if (confirmacion) {
        botonEstado.classList.remove("activo");
        botonEstado.classList.add("inactivo");
        $.ajax({
          type: "POST",
          dateType: "json",
          url: "Controles/historialEmpresa.php",
          async : false,
          data: {
            accion: "eliminarOferta",
            IDoferta: IDoferta,
          },
          success: function (resp) {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Exito...",
                text: "Se ha modificado correctamente!",
                showConfirmButton: false,
                timer: 2500,
              });
              setInterval(Recargar,2500);
            
            
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

function Recargar(){
    window.location = "historialEmpresa.php";
}


function ConsultarEstadoOferta(idOferta){
    var retornar;
    $.ajax({
        type: "POST",
        url: "Controles/historialEmpresa.php",
        async : false,
        data: {
          accion: "consultarEstado",
          idOferta: idOferta,
        },
        success : function(resp){
          retornar = resp;
        }
      })
      return retornar;
}


function ConsultarTodasLasOfertas() {
  var ofertas;
  if (idEmpresa.value != "") {
    $.ajax({
      type: "POST",
      dateType: "json",
      async : false,
      url: "Controles/historialEmpresa.php",
      data: {
        accion: "consultarTodasLasOfertas",
      },
      success: function (resp) {
          ofertas = resp;
      
      },
    });
  }
  return ofertas;
}

function ValidarVigencia(){
  
  ofertas = ConsultarTodasLasOfertas();
  console.log(ofertas);
  
  fechaHoy = hoyFechaHistorialEmpresa();
  
  $.ajax({
    type: "POST",
      dateType: "json",
      url: "Controles/historialEmpresa.php",
      data: {
        accion: "validarVigencia",
        fechaHoy:fechaHoy,
        array : ofertas
      },
      success: function (resp) {
         console.log(resp);
      
      },
  })
  
}

function hoyFechaHistorialEmpresa(){
  var hoy = new Date();
      var dd = hoy.getDate();
      var mm = hoy.getMonth()+1;
      var yyyy = hoy.getFullYear();
      
      dd = addZeroHistorialEmpresa(dd);
      mm = addZeroHistorialEmpresa(mm);

      return yyyy+'-'+mm+'-'+dd;
}

function addZeroHistorialEmpresa(i) {
  if (i < 10) {
      i = '0' + i;
  }
  return i;
}
