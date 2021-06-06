let boton = document.getElementById("botonBuscarOferta");

boton.addEventListener("click",()=>{
    let filtroOferta = document.getElementById("inputBuscarOferta").value;
    let rowFiltros = document.querySelector(".row-filtros");
    
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
                
            }
        });
    }else{
        alert("Ingrese algun valor de busqueda por favor!!");
    }
    

    
    
})