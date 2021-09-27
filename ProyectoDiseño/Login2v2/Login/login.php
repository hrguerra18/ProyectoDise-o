<?php

include("inc/head.php");

?>
<link rel="stylesheet" href="Css/style-index.css">

<body>
<nav class="navbar navbar-expand-lg navbar-light  navegacion" style="background: #f5f5f5">
            <div class="container-fluid">
			<div class="d-flex">
			<img src="https://images.vexels.com/media/users/3/142749/isolated/preview/1a69d982c9d6d078dcf687fdd6f47273-isotipo-de-origami-letra-e-by-vexels.png" class="logo" alt="">
                <a class="navbar-brand" href="index.php">mpresas del Cesar</a>
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
                                <li><a class="dropdown-item" href="registrarEmpresa.php">Empresa</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="registrarProfesional.php">Profesional</a></li>
                                
                                
                            </ul>
                        </li>
                        <a class="nav-link " href="login.php">Iniciar sesion</a>
                       
                        
                    </div>
                </div>
            </div>
        </nav>
	<main class="d-flex w-100 cuerpo">
		
		<div class="container d-flex flex-column ">
			<div class="row ">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div id="mensajeno"></div>
						<div class="card card-edit">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<p class="Bienvenido">Bienvenido</p>
										<!-- <img src="ProyectoDiseño/ProyectoDiseño/Login2v2/Login/inc/img/usuario.png" alt="Charles Hall" class="img-fluid rounded-circle " width="132" height="132" /> -->
									</div>

									<div class="mb-3">
										<label class="form-label">Usuario</label>
										<input class="form-control form-control-lg" type="text" id="user" placeholder="Ingrese el Usuario" />
									</div>
									<div class="mb-3">
										<label class="form-label">Password</label>
										<input class="form-control form-control-lg" type="password" id="password" placeholder="Ingrese password" />
										<small>
											<a href="pages-reset-password.html">Recuperar Clave?</a>
										</small>
									</div>
									<div>
										<label class="form-check">
											<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
											<span class="form-check-label">
												Recordar Datos
											</span>
										</label>
									</div>
									<div class="text-center mt-3">
										<!--<a href="index.html" class="btn btn-lg btn-primary">Ingresar</a> -->
										<button type="submit" class="btn btn-lg btn-danger" id="botoningresar">Ingresar</button>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
	<script src="inc/js/validaciones.js"></script>
	<script src="inc/js/app.js"></script>
	<script type="text/javascript" src="inc/js/login.js"></script>
	<script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>