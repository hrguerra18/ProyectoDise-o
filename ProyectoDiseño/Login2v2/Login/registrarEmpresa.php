<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style-profesional.css">
    <title>Empresa</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="http://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <section class="cuerpo">
        <nav class="navbar navbar-expand-lg navbar-light  navegacion" style="background: #f5f5f5">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Empresas Cesar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse enlaces-nav" id="navbarNavAltMarkup">
                    <div class="navbar-nav ">
                        <a class="nav-link " href="login.php">Iniciar sesion</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Registrarme
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="registrarEmpresa.php">Empresa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="registrarProfesional.php">Profesional</a></li>
                                
                                
                            </ul>
                        </li>
                        
                    </div>
                </div>
            </div>
        </nav>
        <form action="" class="formulario">
            <div class="botones">
                <ul class="ul-botones">
                    <li class="li-profesional li-profesional-opacity">
                        <a class=" a-profesional " href="registrarProfesional.php"> COMO PROFESIONAL</a>
                    </li>
                    <li class="li-empresa li-profesiona-color-fondo">
                        <a class=" a-profesional " href="registrarEmpresa.php"> COMO EMPRESA</a>
                    </li>
                </ul>
            </div>

            <p class="parrafo-crear">Crea una cuenta</p>
            <p class="parrafo-2">Podras hacer uso de la plataforma</p>

            <div class="inputs">
                <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre form-control" autocomplete="off" type="text" name="nombre" id="nombreempresa" placeholder="Nombre de la empresa" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido form-control" autocomplete="off" type="text" name="foto" id="fotoempresa" placeholder="Foto de la empresa" required>
                    </div>

                </div>

                <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre form-control " autocomplete="off" type="text" name="Nit" id="Nitempresa" placeholder="Nit de la empresa" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <select class="input-apellido form-select " name="servicio" id="servicioempresa" required>
                            <option selected disabled value="">Servicio</option>
                            <option value="Reparación">Reparación</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Auditoría">Auditoría</option>
                            <option value="Asesoría">Asesoría</option>
                            <option value="Mensajería">Mensajería</option>
                            <option value="Telefonía">Telefonía</option>
                            <option value="Aseguradora">Aseguradora</option>
                            <option value="Gestoría">Gestoría</option>
                            <option value="Agua">Agua</option>
                            <option value="Gas">Gas</option>
                            <option value="Telecomunicación">Telecomunicación</option>
                            <option value="Electricidad">Electricidad</option>
                            <option value="Bancos">Bancos</option>
                            <option value="Plomería">Plomería</option>
                            <option value="Diseño">Diseño</option>
                            <option value="Programación">Programación</option>
                            <option value="Organización de eventos">Organización de eventos</option>
                            <option value="Funeraria">Funeraria</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Cine">Cine</option>
                            <option value="Discoteca">Discoteca</option>
                            <option value="Restaurante">Restaurante</option>
                            <option value="">Servicio</option>
                        </select>
                    </div>

                </div>

                <div class="grupo-nom-ape">
                    <div class="formulario-nombre borde-div">
                        <input class="input-nombre form-control" autocomplete="off" type="text" name="direccion" id="direccionempresa" placeholder="Direccion" required>
                    </div>

                    <div class="formulario-apellido borde-div">
                        <input class="input-apellido form-control" autocomplete="off" type="number" name="telefono" id="telefonoempresa" placeholder="Telefono" required>
                    </div>

                </div>

                <div class="formulario-correo borde-correo">
                    <input class="input-formulario form-control" type="email" autocomplete="off" name="email" id="emailempresa" placeholder="Correo electronico" required>
                </div>

                <div class="formulario-contra borde-correo">
                    <input class="input-formulario form-control" autocomplete="off" type="password" name="contraseña" id="contraseñaempresa" placeholder="Contraseña" required>
                </div>
            </div>

            <input onclick="AdicionarEmpresa();" class="btn btn-primary" value="Registrarse" type="button">

            <span class="span-politica">Al hacer clic en "registrarse", aceptas nuestra <a class="a-condiciones" href="#"> Condicion de Poliicas y Privacidad</a></span>


        </form>

    </section>
    <script type="text/javascript" src="inc/js/empresas.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="inc/js/app.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
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

</html>