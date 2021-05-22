<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="http://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>


<body>
    <section class="cuerpo">
        <form action="" class="formulario">
            
                <img src="inc/img/usuario.png" alt="" class="imagen">
            
            
                <p class="ingresar">INICIAR SESIÓN</p>
            

                <div class="borde-usuario">
                    <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" class="formulario-usuario" >
                </div>
                
                <div class="borde-contra">
                     <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" class="formulario-contraseña" >
                </div>

                <label class="label-recordar-contra" for="recordarcontraseña"><input class="recordar-contra" type="checkbox" name="recordarcontraseña" id="recordarcontraseña"> Recordar contraseña</label>

                <button type="submit" onclick ="loguearse();" class="btn btn-primary" id ="botoningresarr" >Ingresar</button>

                <p class="olvidar-contra">¿Has olvidado tu contraseña?</p>
        </form>
        
    </section>
    <script type="text/javascript" src="/ProyectoDiseño/Login2v2/Login/inc/js/login.js"></script>
    <script src="inc/js/app.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>