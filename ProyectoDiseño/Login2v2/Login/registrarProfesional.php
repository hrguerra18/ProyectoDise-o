<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style-profesional.css">
    <title>Profesional</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="http://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="Css/style-index.css">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
    <section class="cuerpo">
    <nav class="navbar navbar-expand-lg navbar-light  navegacion" style="background: #f5f5f5">
            <div class="container-fluid">
            <div class="">
        <img src="inc/img/logo.png" class="logo" alt="">
            <a class="navbar-brand" href="#">Empresas Cesar</a>
        </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse enlaces-nav" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Registrarme
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">Empresa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Profesional</a></li>
                                
                                
                            </ul>
                        </li>
                        <a class="nav-link " href="login.php">Iniciar sesion</a>
                       
                        
                    </div>
                </div>
            </div>
        </nav>
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
                        <input class="input-nombre form-control " autocomplete="off" type="text" name="identidad" id="identidad" placeholder="Identidad" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido form-control" autocomplete="off" type="text" name="foto" id="foto" placeholder="Foto" required>
                    </div>

                </div>

                <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre form-control" autocomplete="off" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido form-control" autocomplete="off" type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                    </div>

                </div>

                <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre form-control" autocomplete="off" type="text" name="direccion" id="direccion" placeholder="Direccion" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido form-control" autocomplete="off" type="number" name="telefono" id="telefono" placeholder="Telefono" required>
                    </div>

                </div>

                <div class="formulario-correo borde-correo">
                    <input class="input-formulario form-control" autocomplete="off" type="email" name="email" id="email" placeholder="Correo electronico" required>
                </div>

                <div class="formulario-contra borde-correo">
                    <input class="input-formulario form-control" autocomplete="off" type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required>
                </div>
            </div>

            <input onclick="AdicionarProfesional();" class="btn btn-primary" value="Registrarse" type="button">

            <span class="span-politica">Al hacer clic en "registrarse", aceptas nuestra <a class="a-condiciones" href="#"> Condicion de Poliicas y Privacidad</a></span>


        </form>

    </section>
    <script type="text/javascript" src="inc/js/profesionales.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

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

</body>