<?php
if (empty($_POST['accion'])) {
    $_POST['accion'] = "General";
}

$_POST['accion'] = "buscar";

switch ($_POST['accion']) {

    case "buscar":
        BuscarOfertas();
        break;
}

function BuscarOfertas()
{
    require "Conexion.php";
    // $buscarOferta = $_POST['filtroOferta'];
    mysqli_set_charset($con, "utf8"); //formato de datos utf8

    $buscarOferta = 'ing';

    $sql = "SELECT * FROM oferta WHERE cargo LIKE '$buscarOferta%'";

    if (!$result = mysqli_query($con, $sql)) die();

    $ofertas = array(); //creamos un array

    while ($row = $result->fetch_assoc()) {
        array_push($ofertas, $row);
    }

    $json_string = json_encode($ofertas);
    echo $json_string;

    // while ($row = $result->fetch_assoc()) {

    //     echo  " <div class='row'>;
    //      <div class='card mt-6 edit-tarjeta' style='width: 18rem;'>
    //         <div class='img-tarjeta'>
    //         <img src=" . $row["foto"] . " class='card-img-top img-tarjeta' alt='...'>
    //         </div>
    //         <div class='card-body'>
    //             <h3 class='card-title fw-bold tamaño-fuente'>Cargo: " . $row["cargo"] . "</h3>
    //             <h3 class='card-title fw-bold tamaño-fuente'>descirpcion: " . $row["descripcion"] . "</h3>
    //         </div>
    //         <ul class=list-group list-group-flush'>
    //             <li class='list-group-item'>Salario: " . $row["salario"] . "</li>
    //             <li class='list-group-item'>Condiciones: " . $row["condicion"] . "</li>
    //         </ul>
    //         <button data-id=" . $row["IDoferta"] . "  onclick='BuscarOferta();' type='button' class='btnModal color-tarjeta-a' data-bs-toggle='modal' data-bs-target='#exampleModal'>
    //             Ver mas
    //         </button>
    //     </div>
    //      </div>";
    // // }
}
