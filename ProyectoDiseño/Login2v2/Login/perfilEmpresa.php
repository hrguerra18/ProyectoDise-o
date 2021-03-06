<?php
include("inc/head.php");
include("inc/menuEmpresa.php");
?>
<link rel="stylesheet" href="Css/style-crear-oferta.css">
<main class="content">

    <div class="container-fluid p-0">
        <div class="card ">
            <div class="card-body">
                <div class="row row-completa">
                    <div class="row col-md-4 row-1-perfilEmpresa ">
                        <p class="p-row-1">Arrastra tu archivo de logo aqui</p>
                        <img class="img-row-1" src=<?php echo $_SESSION['foto'] ?> alt="">
                        <div class="input-group mb-3 mt-4 archivo">
                            <input type="file" class="form-control" id="inputGroupFile02">

                        </div>
                        <h4 class="h4-row-1"><?php echo $_SESSION['usuario'] ?></h4>
                    </div>

                    <div class="row col-md-8 row-2-perfilEmpresa card-mod">

                        <div class="col-md-12 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NOMBRE DE LA EMPRESA:</label>
                            <input type="text" class="form-control" id="nombreempresa"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">PAGINA WEB:</label>
                            <input type="text" class="form-control" id="paginaweb" placeholder="Ej: https/ejemplo.com" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NIT:</label>
                            <input type="text" disabled="disabled" class="form-control" id="nitempresa"  required value=<?php echo $_SESSION['IDusuario'] ?>>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">SERVICIO:</label>
                            <select class="input-apellido form-select " name="servicio" id="categoriaempresa" required>
                            <option selected disabled value="">Servicio</option>
                            <option value="Reparaci??n">Reparaci??n</option>
                            <option value="Mantenimiento">Mantenimiento</option>
                            <option value="Limpieza">Limpieza</option>
                            <option value="Auditor??a">Auditor??a</option>
                            <option value="Asesor??a">Asesor??a</option>
                            <option value="Mensajer??a">Mensajer??a</option>
                            <option value="Telefon??a">Telefon??a</option>
                            <option value="Aseguradora">Aseguradora</option>
                            <option value="Gestor??a">Gestor??a</option>
                            <option value="Agua">Agua</option>
                            <option value="Gas">Gas</option>
                            <option value="Telecomunicaci??n">Telecomunicaci??n</option>
                            <option value="Electricidad">Electricidad</option>
                            <option value="Bancos">Bancos</option>
                            <option value="Plomer??a">Plomer??a</option>
                            <option value="Dise??o">Dise??o</option>
                            <option value="Programaci??n">Programaci??n</option>
                            <option value="Organizaci??n de eventos">Organizaci??n de eventos</option>
                            <option value="Funeraria">Funeraria</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Cine">Cine</option>
                            <option value="Discoteca">Discoteca</option>
                            <option value="Restaurante">Restaurante</option>
                            <option value="Ventas">Ventas</option>
                            <option value="Servicios">Servicios</option>
                        </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NUMERO DE EMPLEADOS:</label>
                            <input type="number" class="form-control" id="numeroempleado"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 ">
                            <label class="fw-bold" for="validationCustom04">DESCRIPCION</label>
                            <input type="text" class="form-control input-descripcion-perfil" id="descripcion"  required>

                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <hr style="color:black">

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">DIRECCION:</label>
                            <input type="text" class="form-control" id="direccionempresa"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">TELEFONO:</label>
                            <input type="number" class="form-control" id="telefonoempresa"  required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="departamentoProfesional">DEPARTAMENTO:</label>
                            <select class="form-control form-select" id="departamentoEmpresa" name="departamento"  >
                                <option value=""></option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Antioquia">Antioquia</option>
                                <option value="Arauca">Arauca</option>
                                <option value="Atl??ntico">Atl??ntico</option>
                                <option value="Bol??var">Bol??var</option>
                                <option value="Boyac??">Boyac??</option>
                                <option value="Caldas">Caldas</option>
                                <option value="Caquet??">Caquet??</option>
                                <option value="Casanare">Casanare</option>
                                <option value="Cauca">Cauca</option>
                                <option value="Cesar">Cesar</option>
                                <option value="Choc??">Choc??</option>
                                <option value="C??rdoba">C??rdoba</option>
                                <option value="Cundinamarca">Cundinamarca</option>
                                <option value="Guain??a">Guain??a</option>
                                <option value="Guaviare">Guaviare</option>
                                <option value="Huila">Huila</option>
                                <option value="La Guajira">La Guajira</option>
                                <option value="Magdalena">Magdalena</option>
                                <option value="Meta">Meta</option>
                                <option value="Nari??o">Nari??o</option>
                                <option value="Norte de Santander">Norte de Santander</option>
                                <option value="Putumayo">Putumayo</option>
                                <option value="Quind??o">Quind??o</option>
                                <option value="Risaralda">Risaralda</option>
                                <option value="San Andr??s y Providencia">San Andr??s y Providencia</option>
                                <option value="Santander">Santander</option>
                                <option value="Sucre">Sucre</option>
                                <option value="Tolima">Tolima</option>
                                <option value="Valle del Cauca">Valle del Cauca</option>
                                <option value="Vaup??s">Vaup??s</option>
                                <option value="Vichada">Vichada</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label for="ciudadProfesional" class="mb-3 fw-bold control-label">CIUDAD:</label>
                            <select class="form-control form-select" id="ciudad" >
                                <option value=""></option>
                                <option value="Arauca">Arauca</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Barranquilla">Barranquilla</option>
                                <option value="Bogot??">Bogot??</option>
                                <option value="Bucaramanga">Bucaramanga</option>
                                <option value="Cali">Cali</option>
                                <option value="Cartagena">Cartagena</option>
                                <option value="C??cuta">C??cuta</option>
                                <option value="Florencia">Florencia</option>
                                <option value="Ibagu??">Ibagu??</option>
                                <option value="Leticia">Leticia</option>
                                <option value="Manizales">Manizales</option>
                                <option value="Medell??n">Medell??n</option>
                                <option value="Mit??">Mit??</option>
                                <option value="Mocoa">Mocoa</option>
                                <option value="Monter??a">Monter??a</option>
                                <option value="Neiva">Neiva</option>
                                <option value="Pasto">Pasto</option>
                                <option value="Pereira">Pereira</option>
                                <option value="Popay??n">Popay??n</option>
                                <option value="Puerto Carre??o">Puerto Carre??o</option>
                                <option value="Puerto In??rida">Puerto In??rida</option>
                                <option value="Quibd??">Quibd??</option>
                                <option value="Riohacha">Riohacha</option>
                                <option value="San Andr??s">San Andr??s</option>
                                <option value="San Jos?? del Guaviare">San Jos?? del Guaviare</option>
                                <option value="Santa Marta">Santa Marta</option>
                                <option value="Sincelejo">Sincelejo</option>
                                <option value="Tunja">Tunja</option>
                                <option value="Valledupar">Valledupar</option>
                                <option value="Villavicencio">Villavicencio</option>
                                <option value="Yopal">Yopal</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                            </div>
                        

                        <div style="display:flex m-2">
                            
                            <button onclick="ModificarPerfil();" class="btn btn-danger" type="submit">GUARDAR CAMBIOS</button>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <script type="text/javascript" src="inc/js/perfilempresa.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function() {
                'use strict';
                window.addEventListener('load', function() {

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>


</main>



<?php
include("inc/footer.php");

?>