<?php
include("inc/head.php");
include("inc/menuEmpresa.php");
?>

<link rel="stylesheet" href="Css/style-empresa.css">

<main class="content">

  <div class="container-fluid">
    <div class="card ">
      <div class="card-body">
        <div class="row">
          <form class="d-flex centrar">
            <input class="form-control me-2  w-100 edit-input" type="search" placeholder="Ejemplo: Ingeniero, Contador, Psicologo..." aria-label="Search">
            <button class=" edit-input boton" type="submit">Buscar</button>
          </form>

          <div class="d-flex cargar-tarjetas-profesional">
            
          </div>
        </div>
      </div>
    </div>
  </div>

















</main>

<?php
include("inc/footer.php");
?>