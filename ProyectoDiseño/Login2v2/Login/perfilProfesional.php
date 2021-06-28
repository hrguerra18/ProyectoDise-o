<?php
include("inc/head.php");
include("inc/menuProfesional.php");
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
                            <label class="mb-3 fw-bold" for="validationCustom01">CARRERA:</label>
                            <input type="hidden" class="form-control" id="identidadProfesional" value="<?php echo $_SESSION['IDusuario'] ?>">
                            <select class="form-control form-select" id="carreraProfesional">
                                <option disabled value="">SELECCIONE SU CARRERA</option>
                                <option value="Administración">Administración y afines</option>
                                <option value="Agronomía">Agronomía</option>
                                <option value="Antropología">Antropología</option>
                                <option value="Arqueología">Arqueología</option>
                                <option value="Arquitectura">Arquitectura y afines</option>
                                <option value="Artes Liberales">Artes Liberales</option>
                                <option value="Artes Plásticas, visuales y afines">Artes Plásticas, visuales y afines</option>
                                <option value="Artes Representativas">Artes Representativas y afines</option>
                                <option value="Bacteriología">Bacteriología</option>
                                <option value="Bibliotecología">Bibliotecología</option>
                                <option value="Biología">Biología y afines</option>
                                <option value="Cartografía">Cartografía</option>
                                <option value="Ciencias Políticas y Relaciones Internacionales">Ciencias Políticas y Relaciones Internacionales</option>
                                <option value="Ciencias Sociales">Ciencias Sociales</option>
                                <option value="Cine, Televisión">Cine, Televisión y afines</option>
                                <option value="Comercio Exterior, Negocios Internacionales">Comercio Exterior, Negocios Internacionales y afines</option>
                                <option value="Comunicación Social y Periodismo">Comunicación Social y Periodismo</option>
                                <option value="Conservación y Restauración de Bienes Inmuebles">Conservación y Restauración de Bienes Inmuebles</option>
                                <option value="Contaduría">Contaduría y afines</option>
                                <option value="Deportes, Educación Física y Recreación">Deportes, Educación Física y Recreación</option>
                                <option value="Derecho">Derecho y afines</option>
                                <option value="Diseño de Interiores">Diseño de Interiores</option>
                                <option value="Diseño de Modas">Diseño de Modas</option>
                                <option value="Diseño Gráfico">Diseño Gráfico</option>
                                <option value="Diseño Industrial">Diseño Industrial</option>
                                <option value="Economía">Economía y afines</option>
                                <option value="Educación Básica">Educación Básica</option>
                                <option value="Educación Media">Educación Media</option>
                                <option value="Educación para otras modalidades">Educación para otras modalidades</option>
                                <option value="Educación Preescolar">Educación Preescolar</option>
                                <option value="Enfermería">Enfermería</option>
                                <option value="Etnoeducación y Desarrollo Comunitario">Etnoeducación y Desarrollo Comunitario</option>
                                <option value="Farmacia">Farmacia</option>
                                <option value="Filosofía">Filosofía</option>
                                <option value="Física">Física</option>
                                <option value="Fisioterapia">Fisioterapia</option>
                                <option value="Fonoaudiología">Fonoaudiología</option>
                                <option value="Formación de Empresarios">Formación de Empresarios</option>
                                <option value="Geociencias">Geociencias</option>
                                <option value="Geografía">Geografía</option>
                                <option value="Geología">Geología</option>
                                <option value="Gestión Gastronómica">Gestión Gastronómica</option>
                                <option value="Gestión Naviera y Portuaria">Gestión Naviera y Portuaria</option>
                                <option value="Gestión Turística y Hotelera">Gestión Turística y Hotelera</option>
                                <option value="Historia">Historia</option>
                                <option value="Ingeniería Acuícola">Ingeniería Acuícola</option>
                                <option value="Ingeniería Aeronáutica">Ingeniería Aeronáutica</option>
                                <option value="Ingeniería Agrícola">Ingeniería Agrícola</option>
                                <option value="Ingeniería Agroindustrial">Ingeniería Agroindustrial</option>
                                <option value="Ingeniería Agronómica">Ingeniería Agronómica</option>
                                <option value="Ingeniería Ambiental">Ingeniería Ambiental</option>
                                <option value="Ingeniería Biomédica">Ingeniería Biomédica</option>
                                <option value="Ingeniería Civil">Ingeniería Civil</option>
                                <option value="Ingeniería Comercial">Ingeniería Comercial</option>
                                <option value="Ingeniería de Alimentos">Ingeniería de Alimentos y Afines</option>
                                <option value="Ingeniería de Diseño de Producto">Ingeniería de Diseño de Producto</option>
                                <option value="Ingeniería de Minas">Ingeniería de Minas</option>
                                <option value="Ingeniería de Petróleos">Ingeniería de Petróleos</option>
                                <option value="Ingeniería de Procesos">Ingeniería de Procesos</option>
                                <option value="Ingeniería de Producción">Ingeniería de Producción</option>
                                <option value="Ingeniería de Sistemas">Ingeniería de Sistemas y Afines</option>
                                <option value="Ingeniería de Telecomunicaciones">Ingeniería de Telecomunicaciones</option>
                                <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                                <option value="Ingeniería Electrónica">Ingeniería Electrónica</option>
                                <option value="Ingeniería Financiera">Ingeniería Financiera</option>
                                <option value="Ingeniería Forestal">Ingeniería Forestal</option>
                                <option value="Ingeniería geográfica y Ambienta">Ingeniería geográfica y Ambiental</option>
                                <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                                <option value="Ingeniería Materiales">Ingeniería Materiales</option>
                                <option value="Ingeniería Mecánica">Ingeniería Mecánica</option>
                                <option value="Ingeniería Mecatrónica">Ingeniería Mecatrónica</option>
                                <option value="Ingeniería Metalúrgica">Ingeniería Metalúrgica</option>
                                <option value="Ingeniería Multimedia">Ingeniería Multimedia</option>
                                <option value="Ingeniería Naval">Ingeniería Naval</option>
                                <option value="Ingeniería Química">Ingeniería Química</option>
                                <option value="Ingeniería Telemática">Ingeniería Telemática</option>
                                <option value="Ingeniería Textil">Ingeniería Textil</option>
                                <option value="Ingeniería Topográfica">Ingeniería Topográfica</option>
                                <option value="Instrumentación Quirúrgica">Instrumentación Quirúrgica</option>
                                <option value="Lenguas Modernas">Lenguas Modernas y Afines</option>
                                <option value="Licenciatura en Ciencias Naturales y Educación Ambiental">Licenciatura en Ciencias Naturales y Educación Ambiental</option>
                                <option value="Licenciatura en Pedagogía Social para la Rehabilitación">Licenciatura en Pedagogía Social para la Rehabilitación</option>
                                <option value="Literatura, Lingüística">Literatura, Lingüística y Afines</option>
                                <option value="Mantenimiento de Computadores y Redes">Mantenimiento de Computadores y Redes</option>
                                <option value="Mantenimiento de Equipos de Audio y Vídeo">Mantenimiento de Equipos de Audio y Vídeo</option>
                                <option value="Matemáticas, Estadística">Matemáticas, Estadística y Afines</option>
                                <option value="Medicina">Medicina</option>
                                <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                                <option value="Mercadeo">Mercadeo</option>
                                <option value="Microbiología">Microbiología</option>
                                <option value="Museología">Museología</option>
                                <option value="Música">Música y afines</option>
                                <option value="17">Nutrición y Dietética</option>
                                <option value="Odontología">Odontología</option>
                                <option value="Optometría">Optometría</option>
                                <option value="Pedagogía Reeducativa">Pedagogía Reeducativa</option>
                                <option value="Psicología">Psicología</option>
                                <option value="Publicidad">Publicidad y afines</option>
                                <option value="Química">Química y afines</option>
                                <option value="Salud Ocupacional">Salud Ocupacional</option>
                                <option value="Sociología">Sociología</option>
                                <option value="Técnica Profesional en Manejo de Voz y Datos para BPO">Técnica Profesional en Manejo de Voz y Datos para BPO</option>
                                <option value="Técnico Profesional de Entrenamiento Deportivo">Técnico Profesional de Entrenamiento Deportivo</option>
                                <option value="178">Técnico Profesional en Cuidado Infantil</option>
                                <option value="Técnico Profesional en Cuidado Infantil">Tecnología Agropecuaria</option>
                                <option value="Tecnología en Análisis Ambientales">Tecnología en Análisis Ambientales</option>
                                <option value="Tecnología en Atención Prehospitalaria">Tecnología en Atención Prehospitalaria</option>
                                <option value="Tecnología en Creación y Producción de Espacios Comerciales">Tecnología en Creación y Producción de Espacios Comerciales</option>
                                <option value="Tecnología en Electromecánica">Tecnología en Electromecánica</option>
                                <option value="Tecnología en Gerontología">Tecnología en Gerontología</option>
                                <option value="Tecnología en instrumentación electrónica">Tecnología en instrumentación electrónica</option>
                                <option value="Tecnología en Mecánica Dental">Tecnología en Mecánica Dental</option>
                                <option value="Tecnología en Obras Civiles">Tecnología en Obras Civiles</option>
                                <option value="Tecnología en salud ocupacional">Tecnología en salud ocupacional</option>
                                <option value="Tecnología en Telecomunicaciones">Tecnología en Telecomunicaciones</option>
                                <option value="Tecnología en Topografía">Tecnología en Topografía</option>
                                <option value="Teología y afines">Teología y afines</option>
                                <option value="Terapia Ocupacional">Terapia Ocupacional</option>
                                <option value="Terapia Respiratoria">Terapia Respiratoria</option>
                                <option value="Trabajo social">Trabajo social</option>
                                <option value="Zootecnia">Zootecnia</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">FECHA NACIMIENTO:</label>
                            <input type="date" class="form-control" id="fechaNacimientoProfesional" placeholder="">
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">CORREO:</label>
                            <input type="text" disabled="disabled" class="form-control" id="correoProfesional" placeholder="Correo personal" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">NOMBRE:</label>
                            <input type="text" class="form-control" id="nombreProfesional" placeholder="Nombre" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">APELLIDO:</label>
                            <input type="text" class="form-control" id="apellidoProfesional" placeholder="Apellido" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-12 mb-3 ">
                            <label class="fw-bold" for="validationCustom04">SOBRE MI:</label>
                            <input type="text" class="form-control" id="sobreMiProfesional">

                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <hr style="color:black">

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">DIRECCION:</label>
                            <input type="text" class="form-control" id="direccionProfesional" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">TELEFONO:</label>
                            <input type="number" class="form-control" id="telefonoProfesional" required>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="departamentoProfesional">DEPARTAMENTO:</label>
                            <select class="form-control form-select" id="departamentoProfesional" name="departamento">
                                <option value=""></option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Antioquia">Antioquia</option>
                                <option value="Arauca">Arauca</option>
                                <option value="Atlántico">Atlántico</option>
                                <option value="Bolívar">Bolívar</option>
                                <option value="Boyacá">Boyacá</option>
                                <option value="Caldas">Caldas</option>
                                <option value="Caquetá">Caquetá</option>
                                <option value="Casanare">Casanare</option>
                                <option value="Cauca">Cauca</option>
                                <option value="Cesar">Cesar</option>
                                <option value="Chocó">Chocó</option>
                                <option value="Córdoba">Córdoba</option>
                                <option value="Cundinamarca">Cundinamarca</option>
                                <option value="Guainía">Guainía</option>
                                <option value="Guaviare">Guaviare</option>
                                <option value="Huila">Huila</option>
                                <option value="La Guajira">La Guajira</option>
                                <option value="Magdalena">Magdalena</option>
                                <option value="Meta">Meta</option>
                                <option value="Nariño">Nariño</option>
                                <option value="Norte de Santander">Norte de Santander</option>
                                <option value="Putumayo">Putumayo</option>
                                <option value="Quindío">Quindío</option>
                                <option value="Risaralda">Risaralda</option>
                                <option value="San Andrés y Providencia">San Andrés y Providencia</option>
                                <option value="Santander">Santander</option>
                                <option value="Sucre">Sucre</option>
                                <option value="Tolima">Tolima</option>
                                <option value="Valle del Cauca">Valle del Cauca</option>
                                <option value="Vaupés">Vaupés</option>
                                <option value="Vichada">Vichada</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label for="ciudadProfesional" class="mb-3 fw-bold control-label">CIUDAD:</label>
                            <select class="form-control form-select" id="ciudadProfesional">
                                <option value=""></option>
                                <option value="Arauca">Arauca</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Barranquilla">Barranquilla</option>
                                <option value="Bogotá">Bogotá</option>
                                <option value="Bucaramanga">Bucaramanga</option>
                                <option value="Cali">Cali</option>
                                <option value="Cartagena">Cartagena</option>
                                <option value="Cúcuta">Cúcuta</option>
                                <option value="Florencia">Florencia</option>
                                <option value="Ibagué">Ibagué</option>
                                <option value="Leticia">Leticia</option>
                                <option value="Manizales">Manizales</option>
                                <option value="Medellín">Medellín</option>
                                <option value="Mitú">Mitú</option>
                                <option value="Mocoa">Mocoa</option>
                                <option value="Montería">Montería</option>
                                <option value="Neiva">Neiva</option>
                                <option value="Pasto">Pasto</option>
                                <option value="Pereira">Pereira</option>
                                <option value="Popayán">Popayán</option>
                                <option value="Puerto Carreño">Puerto Carreño</option>
                                <option value="Puerto Inírida">Puerto Inírida</option>
                                <option value="Quibdó">Quibdó</option>
                                <option value="Riohacha">Riohacha</option>
                                <option value="San Andrés">San Andrés</option>
                                <option value="San José del Guaviare">San José del Guaviare</option>
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
                        <hr style="color:black">
                        <label  class="mb-3 fw-bold control-label">OTROS DATOS IMPORTANTES:</label>
                        <div class="col-md-6 mb-3 ">
                            <label for="ciudadProfesional" class="mb-3 fw-bold control-label">NIVEL ACADEMICO:</label>
                            <select class="form-control form-select" id="nivelAcademico">
                                <option value=""></option>
                                <option value="Doctorado">Doctorado</option>
                                <option value="Maestria">Maestria</option>
                                <option value="Especialización">Especialización</option>
                                <option value="Profesional">Profesional</option>
                                <option value="Tecnólogo">Tecnólogo</option>
                                <option value="Técnico">Técnico</option>
                                <option value="Diplomado">Diplomado</option>
                                <option value="Curso">Curso</option>
                                <option value="Bachiller">Bachiller</option>
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">INSTITUCIÓN DONDE ESTUDIASTE:</label>
                            <input type="text"  class="form-control" id="institucionEstudio">
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">EMPRESA DONDE LABORASTE:</label>
                            <input type="text"  class="form-control" id="empresaLaboraste">
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 ">
                            <label for="ciudadProfesional" class="mb-3 fw-bold control-label">EXPERIENCIA LABORAL:</label>
                            <select class="form-control form-select" id="experienciaLaboral">
                                <option disabled selected value=""></option>
                                <option value="1 Año">1 Año</option>
                                <option value="2 Años">2 Años</option>
                                <option value="3 Años">3 Años</option>
                                <option value="4 Años">4 Años</option>
                                <option value="5 Años">5 Años</option>
                                <option value="6 Años">6 Años</option>
                                <option value="7 Años">7 Años</option>
                                <option value="8 Años">8 Años</option>
                                <option value="9 Años">9 Años</option>
                                <option value="10 Años">10 Años</option>
                                <option value="11 Años">11 Años</option>
                                <option value="12 Años">12 Años</option>
                                <option value="13 Años">13 Años</option>
                                <option value="14 Años">14 Años</option>
                                <option value="15 Años">15 Años</option>
                                <option value="16 Años">16 Años</option>
                                <option value="17 Años">17 Años</option>
                                <option value="18 Años">18 Años</option>
                                <option value="19 Años">19 Años</option>
                                <option value="20 Años">20 Años</option>
                                <option value="21 Años">21 Años</option>
                                <option value="22 Años">22 Años</option>
                                <option value="23 Años">23 Años</option>
                                <option value="24 Años">24 Años</option>
                                <option value="25 Años">25 Años</option>
                                <option value="26 Años">26 Años</option>
                                <option value="27 Años">27 Años</option>
                                <option value="28 Años">28 Años</option>
                                <option value="29 Años">29 Años</option>
                                <option value="30 Años">30 Años</option>
                                
                            </select>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        <div class="col-md-6 mb-3 ">
                            <label class="mb-3 fw-bold" for="validationCustom01">ASPIRACION SALARIAL:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" id="aspiracionSalarial" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">.00</span>
                            </div>
                            <div class="invalid-feedback">
                                Ingrese un Dato Valido
                            </div>
                        </div>

                        
                        <!-- <label for="ciudadProfesional" class="mb-3 fw-bold control-label">ADJUNTAR HOJA DE VIDA:</label>   -->
                        <!-- <form class="archivo" name="formulario-envia" id="formulario-envia" enctype="multipart/form-data" method="post">
                         
                           <input type="file"   id="file">
                           <input type="button" value="Subir" onclick="SubirArchivo()" class="botones-ofertas-adjuntar"  id="inputGroupFile02">
                        </form> -->
                        <div class="col-md-3 mb-3 ">



                        </div>
                        <div style="display:flex m-2">
                            <input onclick="ModificarPerfilProfesional();" class="btn btn-primary" value="Guardar cambios" type="button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="inc/js/perfilProfesional.js"></script>
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