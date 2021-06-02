<?php
session_start();
if ($_SESSION['validar'] == true) {

	if ($_SESSION['tipo'] === "Profesional") {

	} else {
		header('Location: indexEmpresa.php');
	}
} else {
	header('Location: login.php');
}
?>



<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar color-fondo">
			<div class="sidebar-content js-simplebar color-fondo">
				<a class="sidebar-brand" href="index.html">
					<img class="img-logo" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Olimpical.png" alt="">
					
				</a>
				<span class="align-middle nombre-empresa">Nombre del usuario</span>
				<ul class="sidebar-nav color-fondo">
					<li class="sidebar-header">
						Opciones
					</li>

					<li class="sidebar-item color-fondo ">
						<a class="sidebar-link color-fondo-a " href="#">
							<i class="align-middle color-iconos" data-feather="user-plus"></i> <span class="align-middle ">Personal de Atencion</span>
						</a>
					</li>



					<li class="sidebar-item ">
						<a class="sidebar-link color-fondo-a" href="#">
							<i class="align-middle" data-feather="thermometer"></i> <span class="align-middle">Pacientes</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link color-fondo-a" href="#">
							<i class="align-middle" data-feather="settings"></i> <span class="align-middle">Citas</span>
						</a>
					</li>

					

				</ul>


			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex ">
					<i class="hamburger align-self-center"></i>
				</a>



				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
								<img  class="avatar img-fluid rounded me-1" alt="Alex" /> <span class="text-dark"> </span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="controles/cerrar.php">Cerrar Session</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>