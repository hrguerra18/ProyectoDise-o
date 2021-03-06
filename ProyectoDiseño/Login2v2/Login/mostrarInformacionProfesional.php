<?php
include("inc/head.php");
include("inc/menuEmpresa.php");
?>
<link rel="stylesheet" href="Css/style-crear-oferta.css">
<main class="content ">
<div class="container-fluid p-0">
      <div class="card ">
          <div class="card-body">
          <div class="row row-completa">
                    <div class="row col-md-4 row-1-perfilEmpresa ">
                        <p class="p-row-1">Arrastra tu archivo de logo aqui</p>
                        <img class="img-row-1" id="fotoProfesional"  alt="">
                        <div class="input-group mb-3 mt-4 archivo">

                        </div>
                        <h4 class="h4-row-1 " id="nombreDebajoDeFoto"></h4>
                    </div>

                    <div class="row col-md-8 row-2-perfilEmpresa card-mod">

                        <div class="col-md-12 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">CARRERA:</label>
                            <input  type="hidden" class="form-control"disabled="disabled" id="identidadProfesional" value="" >
                            <input type="text" class="form-control"disabled="disabled" id="carreraProfesional" placeholder="" >
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">FECHA NACIMIENTO:</label>
                            <input type="date" class="form-control" disabled="disabled" id="fechaNacimientoProfesional" placeholder="" >
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">CORREO:</label>
                            <input type="text" disabled="disabled" class="form-control" id="correoProfesional" placeholder="Correo personal" required >
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NOMBRE:</label>
                            <input type="text" class="form-control" disabled="disabled"id="nombreProfesional" placeholder="Nombre" required >
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">APELLIDO:</label>
                            <input type="text" class="form-control"disabled="disabled" id="apellidoProfesional" placeholder="Apellido" required >
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 ">
                            <label class="fw-bold" for="validationCustom04">SOBRE MI:</label>
                            <input type="text" class="form-control"disabled="disabled" id="sobreMiProfesional"  >

                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <hr style="color:black">

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">DIRECCION:</label>
                            <input type="text" class="form-control"disabled="disabled" id="direccionProfesional"  required >
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">TELEFONO:</label>
                            <input type="number" class="form-control"disabled="disabled" id="telefonoProfesional"  required >
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="departamentoProfesional">DEPARTAMENTO:</label>
                            <select class="form-control form-select"disabled="disabled" id="departamentoProfesional" name="departamento"  >
                                <option value=""></option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Antioquia">Antioquia</option>
                                <option value="Arauca">Arauca</option>
                                <option value="Atl??ntico">Atl??ntico</option>
                                <option value="Bol??var">Bol??var</option>
                                <option value="Boyac??">Boyac??</option>
                                <option value="Caldas">Caldas</option>
                                <option value="Caquet??">Caquet??</option>
                                <option value="Casanare">Casanare</option>
                                <option value="Cauca">Cauca</option>
                                <option value="Cesar">Cesar</option>
                                <option value="Choc??">Choc??</option>
                                <option value="C??rdoba">C??rdoba</option>
                                <option value="Cundinamarca">Cundinamarca</option>
                                <option value="Guain??a">Guain??a</option>
                                <option value="Guaviare">Guaviare</option>
                                <option value="Huila">Huila</option>
                                <option value="La Guajira">La Guajira</option>
                                <option value="Magdalena">Magdalena</option>
                                <option value="Meta">Meta</option>
                                <option value="Nari??o">Nari??o</option>
                                <option value="Norte de Santander">Norte de Santander</option>
                                <option value="Putumayo">Putumayo</option>
                                <option value="Quind??o">Quind??o</option>
                                <option value="Risaralda">Risaralda</option>
                                <option value="San Andr??s y Providencia">San Andr??s y Providencia</option>
                                <option value="Santander">Santander</option>
                                <option value="Sucre">Sucre</option>
                                <option value="Tolima">Tolima</option>
                                <option value="Valle del Cauca">Valle del Cauca</option>
                                <option value="Vaup??s">Vaup??s</option>
                                <option value="Vichada">Vichada</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label for="ciudadProfesional" class="mb-3 fw-bold control-label">CIUDAD:</label>
                            <select class="form-control form-select"disabled="disabled" id="ciudadProfesional" >
                                <option value=""></option>
                                <option value="Arauca">Arauca</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Barranquilla">Barranquilla</option>
                                <option value="Bogot??">Bogot??</option>
                                <option value="Bucaramanga">Bucaramanga</option>
                                <option value="Cali">Cali</option>
                                <option value="Cartagena">Cartagena</option>
                                <option value="C??cuta">C??cuta</option>
                                <option value="Florencia">Florencia</option>
                                <option value="Ibagu??">Ibagu??</option>
                                <option value="Leticia">Leticia</option>
                                <option value="Manizales">Manizales</option>
                                <option value="Medell??n">Medell??n</option>
                                <option value="Mit??">Mit??</option>
                                <option value="Mocoa">Mocoa</option>
                                <option value="Monter??a">Monter??a</option>
                                <option value="Neiva">Neiva</option>
                                <option value="Pasto">Pasto</option>
                                <option value="Pereira">Pereira</option>
                                <option value="Popay??n">Popay??n</option>
                                <option value="Puerto Carre??o">Puerto Carre??o</option>
                                <option value="Puerto In??rida">Puerto In??rida</option>
                                <option value="Quibd??">Quibd??</option>
                                <option value="Riohacha">Riohacha</option>
                                <option value="San Andr??s">San Andr??s</option>
                                <option value="San Jos?? del Guaviare">San Jos?? del Guaviare</option>
                                <option value="Santa Marta">Santa Marta</option>
                                <option value="Sincelejo">Sincelejo</option>
                                <option value="Tunja">Tunja</option>
                                <option value="Valledupar">Valledupar</option>
                                <option value="Villavicencio">Villavicencio</option>
                                <option value="Yopal">Yopal</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <label  class="mb-3 fw-bold control-label">OTROS DATOS IMPORTANTES:</label>
                        <div class="col-md-6 mb-3 ">
                            <label for="ciudadProfesional" class="mb-3 fw-bold control-label">NIVEL ACADEMICO:</label>
                            <select class="form-control form-select" disabled="disabled" id="nivelAcademico">
                                <option value=""></option>
                                <option value="Doctorado">Doctorado</option>
                                <option value="Maestria">Maestria</option>
                                <option value="Especializaci??n">Especializaci??n</option>
                                <option value="Profesional">Profesional</option>
                                <option value="Tecn??logo">Tecn??logo</option>
                                <option value="T??cnico">T??cnico</option>
                                <option value="Diplomado">Diplomado</option>
                                <option value="Curso">Curso</option>
                                <option value="Bachiller">Bachiller</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">INSTITUCI??N DONDE ESTUDIASTE:</label>
                            <input type="text"  class="form-control" disabled="disabled" id="institucionEstudio">
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">EMPRESA DONDE LABORASTE:</label>
                            <input type="text"  class="form-control" disabled="disabled" id="empresaLaboraste">
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="ciudadProfesional" class="mb-3 fw-bold control-label">EXPERIENCIA LABORAL:</label>
                            <select class="form-control form-select" disabled="disabled" id="experienciaLaboral">
                                <option disabled selected value=""></option>
                                <option value="1 A??o">1 A??o</option>
                                <option value="2 A??os">2 A??os</option>
                                <option value="3 A??os">3 A??os</option>
                                <option value="4 A??os">4 A??os</option>
                                <option value="5 A??os">5 A??os</option>
                                <option value="6 A??os">6 A??os</option>
                                <option value="7 A??os">7 A??os</option>
                                <option value="8 A??os">8 A??os</option>
                                <option value="9 A??os">9 A??os</option>
                                <option value="10 A??os">10 A??os</option>
                                <option value="11 A??os">11 A??os</option>
                                <option value="12 A??os">12 A??os</option>
                                <option value="13 A??os">13 A??os</option>
                                <option value="14 A??os">14 A??os</option>
                                <option value="15 A??os">15 A??os</option>
                                <option value="16 A??os">16 A??os</option>
                                <option value="17 A??os">17 A??os</option>
                                <option value="18 A??os">18 A??os</option>
                                <option value="19 A??os">19 A??os</option>
                                <option value="20 A??os">20 A??os</option>
                                <option value="21 A??os">21 A??os</option>
                                <option value="22 A??os">22 A??os</option>
                                <option value="23 A??os">23 A??os</option>
                                <option value="24 A??os">24 A??os</option>
                                <option value="25 A??os">25 A??os</option>
                                <option value="26 A??os">26 A??os</option>
                                <option value="27 A??os">27 A??os</option>
                                <option value="28 A??os">28 A??os</option>
                                <option value="29 A??os">29 A??os</option>
                                <option value="30 A??os">30 A??os</option>
                                
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">ASPIRACION SALARIAL:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="aspiracionSalarial" disabled="disabled" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div style="display:flex m-2">
                        <!-- <button onclick="ConsultarPerfil();" class="btn btn-primary" type="submit">Ver perfil</button> -->
                    </div>
                    </div>
                </div>
          </div>

      </div>

    

        <script type="text/javascript" src="inc/js/perfilempresa.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="inc/js/mostrarInformacionProfesional.js"></script>

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