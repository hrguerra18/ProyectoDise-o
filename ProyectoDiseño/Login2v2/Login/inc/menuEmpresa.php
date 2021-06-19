<?php
session_start();
if ($_SESSION['validar'] == true) {

	if ($_SESSION['tipo'] === "Empresa") {

	} else {
		header('Location: indexProfesional.php');
	}
} else {
	header('Location: login.php');
}

?>



<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar color-fondo">
			<div class="sidebar-content js-simplebar color-fondo">
				<a class="sidebar-brand" href="inicioEmpresa.php">
					<img class="img-logo" src=<?php echo $_SESSION['foto']?> alt="Nombre de la empresa">
					
				</a>
				<span class="align-middle nombre-empresa"><?php echo $_SESSION['usuario']?></span>
				<ul class="sidebar-nav color-fondo">
					<li class="sidebar-header">
						Opciones
					</li>

					<li class="sidebar-item color-fondo ">
						<a class="sidebar-link color-fondo-a " href="indexEmpresa.php">
							<i class="align-middle color-iconos" data-feather="home"></i> <span class="align-middle ">Inicio</span>
						</a>
					</li>



					<li class="sidebar-item ">
						<a class="sidebar-link color-fondo-a" href="perfilEmpresa.php">
							<i class="align-middle" data-feather="bell"></i> <span class="align-middle">Perfil</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link color-fondo-a" href="crearOferta.php">
							<i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Crear oferta</span>
						</a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link color-fondo-a" href="historialEmpresa.php">
							<i class="align-middle" data-feather="archive"></i> <span class="align-middle">Historial</span>
						</a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link color-fondo-a" href="#">
							<i class="align-middle" data-feather="lock"></i> <span class="align-middle">Seguridad</span>
						</a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link color-fondo-a" href="#">
							<i class="align-middle" data-feather="phone"></i> <span class="align-middle">Contacto</span>
						</a>
					</li>

                    <li class="sidebar-item">
						<a class="sidebar-link color-fondo-a" href="controles/cerrar.php">
							<i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Cerrar sesion</span>
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
								<img src= <?php echo $_SESSION['foto']?> class="avatar img-fluid rounded me-1" alt="Alex" /> <span class="text-dark"> <?php echo $_SESSION['usuario']?> </span>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="controles/cerrar.php">Cerrar Session</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>