<?php
include("inc/head.php");
include("inc/menuEmpresa.php");
?>
<link rel="stylesheet" href="Css/style-crear-oferta.css">
<main class="content">

    <div class="container-fluid p-0">
        <div class="card ">
            <div class="card-body">
                <div class="row row-completa">
                    <div class="row col-md-4 row-1-perfilEmpresa ">
                        <p class="p-row-1">Arrastra tu archivo de logo aqui</p>
                        <img class="img-row-1" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Olimpical.png" alt="">
                        <div class="input-group mb-3 mt-4 archivo">
                            <input type="file" class="form-control" id="inputGroupFile02">

                        </div>
                        <h4 class="h4-row-1">Nombre de la empresa</h4>
                    </div>

                    <div class="row col-md-8 row-2-perfilEmpresa card-mod">
                        
                        <div class="col-md-12 mb-3 ">
                            <label class="mb-3 fw-bold"  for="validationCustom01">NOMBRE DE LA EMPRESA:</label>
                            <input type="text" class="form-control" id="nombreempresa" placeholder="Nombre de la empresa" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">PAGINA WEB:</label>
                            <input type="text" class="form-control" id="paginaweb" placeholder="Ej: https/ejemplo.com" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NIT:</label>
                            <input type="text" disabled="disabled" class="form-control" id="nitempresa" placeholder="Nit de la empresa" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">CATEGORIA:</label>
                            <select class="form-select" id="categoriaempresa" aria-label="Default select example" required>
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
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NUMERO DE EMPLEADOS:</label>
                            <input type="number" class="form-control" id="numeroempleado" placeholder="Nit de la empresa" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 ">
                            <label class="fw-bold" for="validationCustom04">DESCRIPCION</label>
                            <input type="text" class="form-control input-descripcion-perfil" id="descripcion"  placeholder="" required>

                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <hr  style="color:black">

                        <div class="col-md-12 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">DIRECCION:</label>
                            <input type="text" class="form-control" id="direccionempresa" placeholder="" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold for="validationCustom01">CIUDAD:</label>
                            <select class="form-select" id="tipoContrato" aria-label="Default select example" required>
                                <option selected disabled value=""></option>
                                <option value="Activo">Ciudad1</option>
                                <option value="Activo">Ciudad2</option>
                                <option value="Activo">Ciudad3</option>
                                <option value="Activo">Ciudad4</option>
                                <option value="Activo">Ciudad5</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">TELEFONO:</label>
                            <input type="number" class="form-control" id="telefonoempresa" placeholder="" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>




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