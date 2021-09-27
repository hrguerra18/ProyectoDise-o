
$(document).ready(function(){
    $("#botoningresar").click(function(){
        console.log("click");
        var username = $("#user").val().trim();
        var password = $("#password").val().trim();

        loginValidado = ValidarLogin(username,password);
        if (loginValidado[0] == true) {
            $.ajax({
                url:'Controles/validarUsuario.php',
                type:'post',
                async: false,
                data:{
                    username:username,
                    password:password
                },
                success:function(response){
                    response = JSON.parse(response);
                    if (response.validar== false) {
                        return mensaje("Usted no se encuentra registrado")
                    }
                    window.location="indexEmpresa.php";
                }
            });
        }else{
            mensaje(loginValidado[1])
        }
    });
});

const mensaje = (mensaje)=>{
    Swal.fire({
        icon: 'error',
        title: 'Error...',
        text: mensaje,
        footer: ''
      }).then((result) =>{
        if (result.isConfirmed) {
            window.location = "login.php"
        }
    })
}