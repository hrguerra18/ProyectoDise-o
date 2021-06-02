<?php

include("inc/head.php");

?>


<body>
	<main class="d-flex w-100 cuerpo">
		<div class="container d-flex flex-column ">
			<div class="row vh-100">
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
										<button type="submit" class="btn btn-lg btn-primary" id="botoningresar">Ingresar</button>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="inc/js/app.js"></script>
	<script type="text/javascript" src="inc/js/login.js"></script>
	<script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>