let boton = document.getElementById("botonBuscarOferta");

boton.addEventListener("click",()=>{
    let filtroOferta = document.getElementById("inputBuscarOferta").value;
    let tarjeta = document.querySelector(".tarjetas");

    if(filtroOferta != ""){
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "Controles/buscarOfertas.php",
            data: {
                accion: "buscar",
                filtroOferta: filtroOferta,
                
            },
            success: function (resp) {
                alert(resp)
            }
        });
    }else{
        alert("Ingrese algun valor de busqueda por favor!!");
    }
    

    
    
})