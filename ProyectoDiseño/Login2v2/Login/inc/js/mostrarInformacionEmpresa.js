$(document).ready(function(){
    InfoEmpresa();
})


function InfoEmpresa(){

    NITempresa = localStorage.getItem('NITempresaEnviar');
    if(NITempresa != ""){
        $.ajax({
            type : "POST",
            dataType : "json",
            url : "Controles/buscarOfertas.php",
            data : {
              accion : "buscarInfoEmpresa",
              NITempresa : NITempresa,
            },
            success: function(resp){
               nombre = capitalize2(resp[0]['nombre']);
                    $("#nombreempresa").val(resp[0]['nombre']);
                    $("#paginaweb").val(resp[0]['pagina']);
                    $("#categoriaempresa").val(resp[0]['servicio']);
                    $("#numeroempleado").val(resp[0]['cantidadEmpleado']);
                    $("#descripcion").val(resp[0]['descripcionEmpresa']);
                    $("#direccionempresa").val(resp[0]['direccion']);
                    $("#telefonoempresa").val(resp[0]['telefono']);
                    $("#departamentoEmpresa").val(resp[0]['departamentoEmpresa']);
                    $("#ciudad").val(resp[0]['ciudad']);
                    img = document.getElementById("fotoEmpresa");
                    img.src = resp[0]['foto'];  
                    h4 = document.getElementById("nombreDebajoDeFoto");
                    h4.innerHTML = nombre;
              
            }
          })
    }
    
  }


  function capitalize2(word) {
    return word[0].toUpperCase() + word.slice(1);
  }