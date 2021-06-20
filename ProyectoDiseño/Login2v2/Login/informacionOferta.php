<?php
include("inc/head.php");
include("inc/menuEmpresa.php");
?>
<link rel="stylesheet" href="Css/style-crear-oferta.css">
<main class="content">

    <div class="container-fluid p-0">
        <div class="card ">
            <div class="card-body">

                <form class="needs-validation col-md-12" novalidate>
                    <div class="row col-md-12 row-2-perfilEmpresa card-mod">
                        <div class="col-md-4 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">CARGO:</label>
                            <input type="text" class="form-control" id="cargoOferta" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">VIGENCIA:</label>
                            <input type="date" class="form-control" id="vigenciaOferta" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">ID OFERTA:</label>
                            <input type="text" disabled="disabled" class="form-control" id="idOferta" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NUMERO APLICANTES:</label>
                            <input type="text" class="form-control" id="aplicantesOferta" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>



                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="mb-3 fw-bold">SECTOR PRINCIPAL</label>
                            <select class="form-select" id="sectorOferta" aria-label="Default select example" required>
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

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="mb-3 fw-bold">TIPO CONTRATO</label>
                            <select class="form-select" id="contratoOferta" aria-label="Default select example" required>
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
                            <label for="validationCustom01" class="mb-3 fw-bold">SALARIO</label>

                            <input type="number" class="form-control" id="salarioOferta" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01" class="mb-3 fw-bold">Horario</label>
                            <select class="form-select" id="horarioOferta" aria-label="Default select example" required>
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

                        <div class="col-md-4 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NIT EMPRESA:</label>
                            <input type="text" disabled="disabled" class="form-control" id="nitEmpresa" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>




                        <div class="col-md-4 mb-3 ">
                            <label class="mb-3 fw-bold" for="departamentoProfesional">ESTADO:</label>
                            <select class="form-control form-select" id="estadoOferta" name="departamento">
                                <option selected disabled>Seleccionar estado</option>
                                <option value="Amazonas">Activo</option>
                                <option value="Antioquia">Inactivo</option>

                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Condiciones</label>
                            <textarea class="form-control" id="condicionesOferta" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>


                        <div class="col-md-12 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom04">DESCRIPCION</label>
                            <input type="text" class="form-control input-descripcion-perfil" id="descripcionOferta" required>

                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </div>
                </form>



            </div>

        </div>

        <script type="text/javascript" src="inc/js/verPostuladosOferta.js"></script>
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

</main>



<?php
include("inc/footer.php");

?>