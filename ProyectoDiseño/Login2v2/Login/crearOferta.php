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
                                <option value="Activo">Ventas</option>
                                <option value="Activo">Comercial</option>
                                <option value="Activo">CallCenter</option>
                                <option value="Activo">Telemercadeo</option>
                                <option value="Activo">Almacen</option>
                                <option value="Activo">Logistica</option>
                                <option value="Activo">Atencion al cliente</option>
                                <option value="Activo">Soporte</option>
                                <option value="Activo">Oficina</option>
                                <option value="Activo">Administracion</option>
                                <option value="Activo">Informatica</option>
                                <option value="Activo">Telecomunicaciones</option>
                                <option value="Activo">Salud</option>
                                <option value="Activo">Reparaciones tecnicas</option>
                                <option value="Activo">Mantenimiento</option>
                                <option value="Activo">Contabilidad</option>
                                <option value="Activo">Finanzas</option>
                                <option value="Activo">Servicios generales</option>
                                <option value="Activo">Aseos</option>
                                <option value="Activo">Ingenieria</option>
                                <option value="Activo">Energia</option>
                                <option value="Activo">Quimica</option>
                                <option value="Activo">Recursos Humanos</option>
                                <option value="Activo">Arquitectura</option>
                                <option value="Activo">Construcciones</option>
                                <option value="Activo">Publicidad</option>
                                <option value="Activo">Mercadeo</option>
                                <option value="Activo">Hoteleria</option>
                                <option value="Activo">Educacion</option>
                                <option value="Activo">Diseño</option>
                                <option value="Activo">Direccion gerencial</option>
                                <option value="Activo">Transporte</option>
                                <option value="Activo">Cuidado del hogar</option>
                                <option value="Activo">Otros</option>
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
                    <button onclick="AdicionarOferta();" class="btn btn-primary color-boton btnCrearOferta" type="submit">Crear Oferta</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="card mt-4 edit-tarjeta" style="width: 18rem;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Olimpical.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title fw-bold tamaño-fuente">Nombre del cargo</h3>
                                <p class="card-text">Aqui va toda la descripcion</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Salario</li>
                                <li class="list-group-item">Perfil del profesional</li>
                                <li class="list-group-item">Condiciones</li>
                            </ul>
                            <div class="card-body div-tarjeta">
                                <a href="#" class="card-link color-tarjeta-a">Ver oferta</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL -->

    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="img-ver-oferta" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Olimpical.png" class="card-img-top" alt="...">
                </div>
                <div class="modal-body">
                    <h5>Nombre del cargo:</h5>
                    <h6>Vigencia de la oferta:</h6>
                    <h6>Numero maximo de aplicantes:</h6>
                    <h6>Descripcion del cargo:</h6>
                    <h6>Sector principal:</h6>
                    <h6>Tipo de contrato:</h6>
                    <h6>Salario:</h6>
                    <h6>Condiciones:</h6>
                    <h6>Horario:</h6>
                    <h6>Perfil del profesional:</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary color-boton-seleccionar-oferta">Seleccionar oferta</button>
                </div>
            </div>
        </div>
    </div>







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

<script src="/ProyectoDiseño/Login2v2/Login/inc/js/crearOferta.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
include("inc/footer.php");

?>