<?php
    //error_reporting(0);
    
    $dni = $_REQUEST['dni'];
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apell'];
    $contraseña = $_REQUEST['pass'];
    $confirmacion = $_REQUEST['confpass'];    
    $telefono = $_REQUEST['ntef'];
    $email = $_REQUEST['email'];

    if($contraseña == $confirmacion){
        $contraseña = $confirmacion;
    }

    $connection = mysqli_connect("localhost","root","toor");
    $database = "calendario";
    $table = "profesor";

    mysqli_select_db($connection,$database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected Successfully.";
    }        

    if(isset($_REQUEST['enviar'])){          
        $query = mysqli_query($connection,"INSERT $table (DNI,Nombre,Apellidos,Contraseña,Email,Telefono) VALUES ('$dni','$nombre','$apellidos','$contraseña','$email','$telefono')");        
        echo "Se ha añadido un nuevo campo";
    }    

    if (mysqli_errno($connection)==0){
    }else{
        if (mysqli_errno($connection)==1062){
            header("Location: ../index.php");            
            exit;
        }else{ 
           $numerror=mysqli_errno($connection);
           $descrerror=mysqli_error($connection);
           echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
        }
    }
    mysqli_close($connection);
    header("Refresh:0");
?>