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
            <input id="inputBuscarOferta" class="form-control me-2  w-100 edit-input" type="text" placeholder="Ejemplo: Ingeniero, Contador, Psicologo..." aria-label="Search">
            <input id="botonBuscarOferta" class="edit-input boton" type="submit" value="Buscar"></input>
          </form>

          <div class="row">
            <p class="p-consulta">Puedes realizar filtros para hacer la busqueda especifica</p>
            <img id="imagen" class="img-consulta" src="inc/img/consulta2.png" alt="">
          </div>

    
        </div>

        <div class="row-filtros d-flex mr-7">

          </div>
      </div>
    </div>
  </div>



</main>

<?php
include("inc/footer.php");
?>