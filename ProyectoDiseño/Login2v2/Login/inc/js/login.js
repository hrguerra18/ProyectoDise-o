
$(document).ready(function(){
    
    $("#botoningresar").click(function(){
        console.log("click");
        var username = $("#user").val().trim();
        var password = $("#password").val().trim();

        if( username != "" && password != "" ){
            console.log("entro");
            $.ajax({
                url:'Controles/validarUsuario.php',
                type:'post',
               
                data:{
                    username:username,
                    password:password
                },
                success:function(response){
                window.location="indexEmpresa.php";
               console.log(response);
                }
            });
        }
    });
});