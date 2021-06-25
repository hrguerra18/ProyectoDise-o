<?php
include("inc/head.php");
include("inc/menuEmpresa.php");
?>
<link rel="stylesheet" href="Css/style-crear-oferta.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<main class="content">

    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="fw-bold">Nombre del cargo</label>
                            <input type="hidden" class="form-control" id="nitempresaOferta" placeholder="Ejemplo: Ingeniero de Sistemas" value=<?php echo $_SESSION['IDusuario'] ?> required>
                            <input type="text" class="form-control" id="nombreCargo" placeholder="Ejemplo: Ingeniero de Sistemas" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="fw-bold">Vigencia de la oferta</label>
                            <input type="date" class="form-control" id="vigenciaOferta" placeholder="Nombres" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02" class="fw-bold">Numero maximo de aplicantes</label>
                            <input type="number" class="form-control" id="numeroAplicantes" placeholder="40" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            <label for="validationCustom04" class="fw-bold">Breve descripcion del cargo</label>
                            <input type="text" class="form-control" id="descripcion" placeholder="Breve descipcion" required>

                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="fw-bold">Sector principal</label>
                            <select class="form-select" id="sector" aria-label="Default select example" required>
                                <option selected disabled value="">Seleccionar categoria</option>
                                <option value="Ventas">Ventas</option>
                                <option value="Comercial">Comercial</option>
                                <option value="CallCenter">CallCenter</option>
                                <option value="Telemercadeo">Telemercadeo</option>
                                <option value="Almacen">Almacen</option>
                                <option value="Logistica">Logistica</option>
                                <option value="Atencion al cliente">Atencion al cliente</option>
                                <option value="Soporte">Soporte</option>
                                <option value="Oficina">Oficina</option>
                                <option value="Administracion">Administracion</option>
                                <option value="Informatica">Informatica</option>
                                <option value="Telecomunicaciones">Telecomunicaciones</option>
                                <option value="Salud">Salud</option>
                                <option value="Reparaciones tecnicas">Reparaciones tecnicas</option>
                                <option value="Mantenimiento">Mantenimiento</option>
                                <option value="Contabilidad">Contabilidad</option>
                                <option value="Finanzas">Finanzas</option>
                                <option value="Servicios generales">Servicios generales</option>
                                <option value="Aseos">Aseos</option>
                                <option value="Ingenieria">Ingenieria</option>
                                <option value="Energia">Energia</option>
                                <option value="Quimica">Quimica</option>
                                <option value="Recursos Humanos">Recursos Humanos</option>
                                <option value="Arquitectura">Arquitectura</option>
                                <option value="Construcciones">Construcciones</option>
                                <option value="Publicidad">Publicidad</option>
                                <option value="Mercadeo">Mercadeo</option>
                                <option value="Hoteleria">Hoteleria</option>
                                <option value="Educacion">Educacion</option>
                                <option value="Diseño">Diseño</option>
                                <option value="Direccion gerencial">Direccion gerencial</option>
                                <option value="Transporte">Transporte</option>
                                <option value="Cuidado del hogar">Cuidado del hogar</option>
                                <option value="Otros">Otros</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="validationCustom01" class="fw-bold">Tipo de contrato</label>
                            <select class="form-select" id="tipoContrato" aria-label="Default select example" required>
                                <option selected disabled value="">Seleccione el sector principal</option>
                                <option value="Tiempo completo">Tiempo completo</option>
                                <option value="Medio tiempo">Medio tiempo</option>
                                <option value="Obra/Labor">Obra/Labor</option>
                                <option value="Pasantia">Pasantia</option>
                                <option value="Por horas">Por horas</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="fw-bold">Salario</label>

                            <input type="number" class="form-control" id="salario" placeholder="Salario" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Condiciones</label>
                            <textarea class="form-control" id="condiciones" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>


                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="fw-bold">Horario</label>
                            <select class="form-select" id="horario" aria-label="Default select example" required>
                                <option selected disabled>Seleccionar horario</option>
                                <option value="Regular">Regular</option>
                                <option value="Flexible">Flexible</option>
                                <option value="Intensivo">Intensivo</option>
                                <option value="Fines de semana">Fines de semana</option>
                                <option value="Nocturno">Nocturno</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>

                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01" class="fw-bold">Perfil del profesional</label>
                            <div class="d-flex flex-wrap">

                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="practicante">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Practicante
                                    </label>
                                </div>
                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="tecnico">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tecnico
                                    </label>
                                </div>
                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="tecnologo">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Tecnologo
                                    </label>
                                </div>
                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="profesional">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Profesional
                                    </label>
                                </div>
                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="postgrado">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Postgrado
                                    </label>
                                </div>
                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="especializacion">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Especializacion
                                    </label>
                                </div>
                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="maestria">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Maestria
                                    </label>
                                </div>

                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="doctorado">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Doctorado
                                    </label>
                                </div>
                                <div class="form-check mt-2  me-2">
                                    <input class="form-check-input" type="checkbox" id="cualquiera" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Cualquiera
                                    </label>
                                </div>
                            </div>
                        </div>



                    </div>
                    <input onclick="AdicionarOferta();" class="btn btn-primary color-boton btnCrearOferta" value="Crear Oferta" type="button">

                    
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0" style="align-items: center;">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation mostrarOfertas" novalidate>
                    <?php
                    require("Controles/ofertas.php");
                    ConsultarOferta($_SESSION['IDusuario']);
                    ?>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL 

    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <img class="img-ver-oferta" src="" class="card-img-top" alt="..."> 
                </div>
                <input type="hidden" class="form-control" id="IDoferta" placeholder="Ejemplo: Ingeniero de Sistemas" required>
                <div class="modal-body">
                    <h5 id="CargoOferta">Nombre del cargo:  <?php //echo $_SESSION['Cargo']?></h5>
                    <h6 id="Vigenciaoferta">Vigencia de la oferta: <?php // echo $_SESSION['Vigencia']?></h6>
                    <h6 id="CantidadAplicanteOferta">Numero maximo de aplicantes: <?php // echo $_SESSION['numeroAplicantes']?></h6>
                    <h6 id="DescripcionOferta">Descripcion del cargo: <?php // echo $_SESSION['descripcion']?></h6>
                    <h6 id="SectorOferta">Sector principal: <?php // echo $_SESSION['sector']?></h6>
                    <h6 id="ContratoOferta">Tipo de contrato: <?php // echo $_SESSION['tipoContrato']?></h6>
                    <h6 id="SalarioOferta">Salario: <?php  //echo $_SESSION['salario']?></h6>
                    <h6 id="CondicionesOferta">Condiciones: <?php  //echo $_SESSION['condicion']?></h6>
                    <h6 id="HorarioOferta">Horario: <?php  //echo $_SESSION['horario']?></h6>
                    <h6 id="PerfilOferta">Perfil del profesional:</h6>
                </div>
                <div class="modal-footer">
                    <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                    <button type='button' onclick='ModificarOferta();' class='btn btn-primary color-boton-seleccionar-oferta '>Modificar</button>
                    <button type='button' onclick='CancelarOferta();' class='btn btn-primary color-boton-seleccionar-oferta'>Cancelar</button>
                </div>
            </div>
        </div>
    </div>

--->





</main>
<script type="text/javascript" src="inc/js/ofertas.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
include("inc/footer.php");

?>