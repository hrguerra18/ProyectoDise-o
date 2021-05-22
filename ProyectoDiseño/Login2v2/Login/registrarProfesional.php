<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style-profesional.css">
    <title>Profesional</title>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="http://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>

<body>
    <section class="cuerpo">
        <form action="" class="formulario">
            <div class="botones">
                <ul class="ul-botones">
                    <li class="li-profesional li-profesiona-color-fondo">
                        <a class=" a-profesional " href="registrarProfesional.php"> COMO PROFESIONAL</a>
                    </li>
                    <li class="li-empresa li-profesional-opacity">
                    <a class=" a-profesional " href="registrarEmpresa.php"> COMO EMPRESA</a>
                    </li>
                </ul>
            </div>

            <p class="parrafo-crear">Crea una cuenta</p>
            <p class="parrafo-2">Podras hacer uso de la plataforma</p>

            <div class="inputs">
            <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre " type="text" name="identidad" id="identidad" placeholder="Identidad" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido " type="text" name="foto" id="foto" placeholder="Foto" required>
                    </div>

                </div>

                <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre " type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido " type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                    </div>

                </div>

                <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre " type="text" name="direccion" id="direccion" placeholder="Direccion" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido " type="number" name="telefono" id="telefono" placeholder="Telefono" required>
                    </div>

                </div>

                <div class="formulario-correo borde-correo">
                    <input class="input-formulario" type="email" name="email" id="email" placeholder="Correo electronico" required>
                </div>

                <div class="formulario-contra borde-correo">
                    <input class="input-formulario" type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                </div>
            </div>

            <button onclick="AdicionarProfesional();" class="btn btn-primary" type="submit">Registrarse</button>

            <span class="span-politica">Al hacer clic en "registrarse", aceptas nuestra <a class="a-condiciones" href="#"> Condicion de Poliicas y Privacidad</a></span>


        </form>

    </section>
    <script type="text/javascript" src="inc/js/profesionales.js"></script>
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

<?php
include("inc/footer.php");
?>