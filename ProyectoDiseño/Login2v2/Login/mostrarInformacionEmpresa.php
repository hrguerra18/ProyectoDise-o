<?php
include("inc/head.php");
include("inc/menuProfesional.php");
?>
<link rel="stylesheet" href="Css/style-crear-oferta.css">
<main class="content ">
<div class="container-fluid p-0">
      <div class="card ">
          <div class="card-body">
              <div class="row row-completa">
                  <div class="row col-md-4 row-1-perfilEmpresa ">
                    
                      <img class="img-row-1 mt-7 mb-5" id="fotoEmpresa" alt="">
                      
                      <h4 class="h4-row-1" id="nombreDebajoDeFoto"></h4>
                  </div>

                  <div class="row col-md-8 row-2-perfilEmpresa card-mod">

                      <div class="col-md-12 mb-3 ">
                          <label class="mb-3 fw-bold" for="validationCustom01">NOMBRE DE LA EMPRESA:</label>
                          <input type="text" class="form-control" disabled="disabled" id="nombreempresa"   required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>
                      <div class="col-md-6 mb-3 ">
                          <label class="mb-3 fw-bold" for="validationCustom01">PAGINA WEB:</label>
                          <input type="text" class="form-control"disabled="disabled" id="paginaweb"  required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>
                      
                      <div class="col-md-6 mb-3 ">
                          <label class="mb-3 fw-bold" for="validationCustom01">CATEGORIA:</label>
                          <input type="text" class="form-control"disabled="disabled"id="categoriaempresa"  required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>
                      <div class="col-md-6 mb-3 ">
                          <label class="mb-3 fw-bold" for="validationCustom01">CANTIDAD DE EMPLEADOS:</label>
                          <input type="number" class="form-control" disabled="disabled"id="numeroempleado"  required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>

                      <div class="col-md-12 mb-3 ">
                          <label class="fw-bold" for="validationCustom04">DESCRIPCION</label>
                          <input type="text" class="form-control input-descripcion-perfil"disabled="disabled" id="descripcion"  required>

                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>

                      <hr style="color:black">

                      <div class="col-md-6 mb-3 ">
                          <label class="mb-3 fw-bold" for="validationCustom01">DIRECCION:</label>
                          <input type="text" class="form-control" disabled="disabled" id="direccionempresa"   required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>
                      <div class="col-md-6 mb-3 ">
                          <label class="mb-3 fw-bold" for="validationCustom01">TELEFONO:</label>
                          <input type="number" disabled="disabled" class="form-control" id="telefonoempresa"  required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>

                      <div class="col-md-6 mb-3 ">
                          <label class="mb-3 fw-bold" for=" validationCustom01">DEPARTAMENTO:</label>
                          <input type="text" class="form-control"disabled="disabled" id="departamentoEmpresa"  required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>

                      <div class="col-md-6 mb-3 ">
                          <label class="mb-3 fw-bold" for=" validationCustom01">CIUDAD:</label>
                          <input type="text" class="form-control"disabled="disabled" id="ciudad"  required>
                          <div class="invalid-feedback">
                              Ingrese un Dato Valido
                          </div>
                      </div>

                     
                  </div>

              </div>
          </div>

      </div>

    

        <script type="text/javascript" src="inc/js/perfilempresa.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="inc/js/mostrarInformacionEmpresa.js"></script>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>


</main>



<?php
include("inc/footer.php");

?>