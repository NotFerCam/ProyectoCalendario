document.getElementById("pedirvac").addEventListener("click",function(){
    var primera = document.getElementById("primera").value;
    var secundaria = document.getElementById("secundaria").value;

    if(primera!=""){            
        $.ajax({
            url:'php/fechas.php',
            type:'POST',
            data:{
                fecha1: primera,
                fecha2: secundaria
            }
        });
    }                
})