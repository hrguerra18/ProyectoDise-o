<?php
include("inc/head.php");
include("inc/menuProfesional.php");
?>
<link rel="stylesheet" href="Css/style-profesional.css">

<main class="content">

    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" novalidate>
                    <input id="idProfesional" type="hidden" value="<?php echo $_SESSION['IDusuario'] ?>">
                    <input id="correo" type="hidden" value="<?php echo $_SESSION['correo'] ?>">
                    <p class="text-justify parrafo-1 mb-5 p-4 pb-1">Si deseas cambiar el correo asociado a tu cuenta, puedes realizarlo a continuacion</p>
                    <div class="row p-4 pt-1">
                        <div class="col-md-4 mb-3 w-50 ">
                            <label class="mb-3 " for="validationCustom01">CORREO NUEVO:</label>
                            <input type="email" class="form-control"  autocomplete="off" id="correoProfesional1" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 w-50">
                            <label class="mb-3 " for="validationCustom01">REPETIR CORREO:</label>
                            <input type="email" class="form-control"  autocomplete="off" id="correoProfesional2" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <input onclick="CambiarCorreoProfesional();" class="btn-configuracion btncambiarCorreo" value="Cambiar correo" type="button" >
                    </div>
                </form>

                <hr style="background-color: #6B0707;   height:2px">
                <form class="needs-validation" novalidate>

                    <div class="row p-4 pt-1">
                        <div class="col-md-4 mb-3 w-50 ">
                            <label class="mb-3 " for="validationCustom02">CONTRASEÑA NUEVA:</label>
                            <input type="text" class="form-control"  autocomplete="off" id="contraseñaProfesional1" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 w-50">
                            <label class="mb-3 " for="validationCustom02">REPETIR CONTRASEÑA:</label>
                            <input type="text" class="form-control"  autocomplete="off" id="contraseñaProfesional2" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <input onclick="CambiarContraseñaProfesional();" class="btn-configuracion " value="Cambiar contraseña" type="button">
                    </div>



                </form>
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