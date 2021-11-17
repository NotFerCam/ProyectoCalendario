document.getElementById("pedirvac").addEventListener("click",function(){
    var primera = document.getElementById("primera").value;
    var secundaria = document.getElementById("secundaria").value;

    var partsPrimera = primera.split("/");    

    var primera = partsPrimera[2]+"/"+partsPrimera[1]+"/"+partsPrimera[0];    

    document.getElementById("primera").value = primera;    

    if(secundaria!=""){
        var partsSegunda = secundaria.split("/");
        var secundaria = partsSegunda[2]+"/"+partsSegunda[1]+"/"+partsSegunda[0];
        document.getElementById("secundaria").value = secundaria;
    }

    if(primera!=""){
        document.getElementById('formulario').action = "php/fechas.php";
    }    
})