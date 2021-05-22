function loguearse(){
    let usuario = $("#usuario").val().trim();
    let contraseña = $("#contraseña").val().trim();
    if( usuario != "" && contraseña != "" ){
        $.ajax({
            url:'ProyectoDiseño/Login2v2/Login/Controles/validarUsuario.php',
            type:'POST',
            dataType: "json",          
            data:{
                usuario:usuario,
                contraseña:contraseña
            },
            success:function(resp){
                alert("success");
                if(resp.validar) {
                    if(esUsuarioEmpresa(resp.tipo)){
                        irAPaginaPrincipalEmpresa();
                    }
                    else
                    irAPaginaPrincipalProfesional();
                }
            }
        });
    }
}


function obtenerUsuario(){
    let nombreUsuario = $("#usuario").val().trim();
    let contraseña = $("#contraseña").val().trim();
    let usuario ={
        'contraseña' : contraseña,
        'nombreUsuario' : nombreUsuario,
    }
    return usuario;
}

function irAPaginaPrincipalEmpresa(){
    let ruta = 'indexEmpresa.php';
    window.location = ruta;
}

function esUsuarioEmpresa(tipo){
    let admnistrativo = 'Empresa';
    if (tipo === admnistrativo)
        return true;
    else
        return false;   
}

function irAPaginaPrincipalProfesional() { 
    let ruta = 'indexProfesional.php';
    window.location = ruta;
}