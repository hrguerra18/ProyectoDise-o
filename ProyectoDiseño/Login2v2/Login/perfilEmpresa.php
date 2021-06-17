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
                        <img class="img-row-1" src=<?php echo $_SESSION['foto'] ?> alt="">
                        <div class="input-group mb-3 mt-4 archivo">
                            <input type="file" class="form-control" id="inputGroupFile02">

                        </div>
                        <h4 class="h4-row-1"><?php echo $_SESSION['usuario'] ?></h4>
                    </div>

                    <div class="row col-md-8 row-2-perfilEmpresa card-mod">

                        <div class="col-md-12 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NOMBRE DE LA EMPRESA:</label>
                            <input type="text" class="form-control" id="nombreempresa"  required>
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
                            <input type="text" disabled="disabled" class="form-control" id="nitempresa"  required value=<?php echo $_SESSION['IDusuario'] ?>>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">CATEGORIA:</label>
                            <input type="text" class="form-control" id="categoriaempresa" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NUMERO DE EMPLEADOS:</label>
                            <input type="number" class="form-control" id="numeroempleado"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 ">
                            <label class="fw-bold" for="validationCustom04">DESCRIPCION</label>
                            <input type="text" class="form-control input-descripcion-perfil" id="descripcion"  required>

                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <hr style="color:black">

                        <div class="col-md-12 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">DIRECCION:</label>
                            <input type="text" class="form-control" id="direccionempresa"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for=" validationCustom01">CIUDAD:</label>
                            <input type="text" class="form-control" id="ciudad"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">TELEFONO:</label>
                            <input type="number" class="form-control" id="telefonoempresa"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div style="display:flex m-2">
                            <button onclick="ConsultarPerfil();" class="btn btn-primary" type="submit">Ver perfil</button>
                            <button onclick="ModificarPerfil();" class="btn btn-primary" type="submit">Modificar</button>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <script type="text/javascript" src="inc/js/perfilempresa.js"></script>
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


</main>



<?php
include("inc/footer.php");

?>