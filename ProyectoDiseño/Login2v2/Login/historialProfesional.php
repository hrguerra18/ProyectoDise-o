<?php
include("inc/head.php");
include("inc/menuProfesional.php");
?>
<link rel="stylesheet" href="Css/style-profesional.css">

<main class="content">

    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">
                <input id="idProfesional" type="hidden" value="<?php echo $_SESSION['IDusuario'] ?>">

                <div class="d-flex texto-1">

                </div>

                <div class="div-seleccionar">
                    <p class="parrafo-select">SELECCIONE EL FILTRO:</p>
                    <select class="form-control form-select seleccionar" id="seleccionarFiltro">
                        <option disabled value="">Seleccione el filtro</option>
                        <option value="todas">Todas</option>
                        <option value="En espera">En espera</option>
                        <option value="Aceptado">Aceptadas</option>
                        <option value="Cancelada">Canceladas</option>

                    </select>
                    <input  id="botonBuscarOferta" onclick="ConsultarPostulacionesHistorialProfesional()" class="edit-input-historial boton" value="Buscar" type="button">

                </div>
                <div class="tarjetas tarjetaVerOfertasAlasQueMePostule"></div>



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