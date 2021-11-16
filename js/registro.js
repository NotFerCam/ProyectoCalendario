document.getElementById("enviar").addEventListener("click",function(){
    var pass = document.getElementById("pass").value;
    var confpass = document.getElementById("confpass").value;    

    console.log("contraseña:" + pass + " ; Confpass:" +confpass)

    if(pass == confpass && pass!="" && confpass!=""){
        document.getElementById('formulario').action = "php/registro.php";
    }
}); 