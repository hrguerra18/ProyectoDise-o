<?php
include("inc/head.php");
include("inc/menuEmpresa.php");
?>
<link rel="stylesheet" href="Css/style-crear-oferta.css">
<main class="content">

    <div class="container-fluid p-0">
        <div class="card ">
            <div class="card-body">
                <input class="idUsuario-verPostulados" type="hidden" value="<?php echo $_SESSION['IDusuario'] ?>">

                <div class="d-flex cuantos-postulados">

                </div>
                <div class="tarjetasProfesionalesPostulados">

                </div>
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