<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style-index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="shortcut icon" href="inc/img/logo.png">
    <title>Empresas del Cesar</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  navegacion" style="background: #FAFAFA">
        <div class="container-fluid">
            <div class="">
                <img src="https://images.vexels.com/media/users/3/142749/isolated/preview/1a69d982c9d6d078dcf687fdd6f47273-isotipo-de-origami-letra-e-by-vexels.png" class="logo" alt="">
                <a class="navbar-brand" href="index.php">mpresas del Cesar</a>
            </div>

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

    <!-- CARRUSEL -->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active div-img-carrusel">
                <img src="http://www.emergya.com/sites/default/files/stories/teletrabajo-emergya.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Bienvenido a Empresas del Cesar</h5>

                    <p>¡Encuentra tu trabajo soñado.!</p>
                </div>
            </div>
        </div>

        <div class="col-12 Banner-uno">
            <div class="col-6 banner-uno-otro">
                <h2 class="col-12 h2-banner-uno">Déjanos ayudarte a encontrar el trabajo de tus sueños</h2>
                <p>Encontrar el empleo ideal es muy fácil con Talentbox. Deja que miles de empresas te vean y te contacten de inmediato. Crea relevancia a tu hoja de vida y recibe las ofertas laborales que encajen contigo.</p>
            </div>

        </div>

        <div class="col-12 Banner-dos">
            <div class="col-6 banner-dos-uno">
                <div class="col-8 contenido-banner-dos-uno">
                    <h4 class="mb-3">Usar Empresas del Cesar es muy fácil</h4>
                    <h2 class="mb-3" style="color:#6B0707">Imagina un asistente personal trabajando 24/7 para ti</h2>
                    <p class="mb-3">Procesamos cientos de ofertas al día, y somos la primera plataforma que sólo te invitará a postularte
                        a las vacantes que cumplan con tu experiencia, formación y expectativas salariales. De esta manera, garanti
                        zamos tanto para las empresas como para ti, un proceso mucho más acertado.
                    </p>
                    <a href="registrarProfesional.php"><button class="btn btn-danger">Quíero comenzar ahora</button></a>
                </div>


            </div>
            <div class="col-6 banner-dos-dos">
                <img class="img-banner-dos-dos" src="https://prnewswire.com.mx/wp-content/uploads/2019/02/rawpixel-metricas-midia-espontanea-unsplash-1.jpg" alt="">
            </div>

        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>

</html>