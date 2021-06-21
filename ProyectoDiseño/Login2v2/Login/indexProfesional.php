<?php
include("inc/head.php");
include("inc/menuProfesional.php");
?>

<link rel="stylesheet" href="Css/style-empresa.css">

<main class="content">

  <div class="container-fluid container-prueba">
    <div class="card ">
      <div class="card-body">
        <div class="row">
          <form class="d-flex centrar">
            <input id="inputBuscarOferta" class="form-control me-2  w-100 edit-input" type="text" placeholder="Ejemplo: Ingeniero, Contador, Psicologo..." aria-label="Search">
            <input id="IdEmpresaOProfesional" type="hidden" value="<?php echo $_SESSION['IDusuario'] ?>">
            <button  id="botonBuscarOferta" class="edit-input boton" type="submit">Buscar</button>
          </form>
          <div id="row-principal" class="row">
            <p id="p-index" class="p-consulta">Puedes realizar filtros para hacer la busqueda especifica</p>
            <img id="imagen" class="img-consulta" src="inc/img/consulta2.png" alt="">
          </div>

    
        </div>
        

        <div class="row-filtros">

        </div>
      </div>
    </div>
  </div>

	<script type="text/javascript" src="inc/js/buscarOferta.js"></script>
</main>

<?php
include("inc/footer.php");
?>