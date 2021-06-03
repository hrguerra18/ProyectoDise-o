<?php
include("inc/head.php");
include("inc/menuProfesional.php");
?>

<link rel="stylesheet" href="Css/style-empresa.css">

<main class="content">

  <div class="container-fluid">
    <div class="card ">
      <div class="card-body">
        <div class="row">
          <form class="d-flex centrar">
            <input class="form-control me-2  w-100 edit-input" type="search" placeholder="Ejemplo: Ingeniero, Contador, Psicologo..." aria-label="Search">
            <button class="edit-input boton" type="submit">Buscar</button>
          </form>

          <div class="row">
            <p class="p-consulta">Puedes realizar filtros para hacer la busqueda especifica</p>
            <img class="img-consulta" src="inc/img/consulta2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include("inc/footer.php");
?>