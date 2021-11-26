<?php
    $dia = $_REQUEST['dia'];
    $email = $_REQUEST['email'];

    $connection = mysqli_connect("localhost","root","toor");
    $database = "calendario";
    $table = "vacaciones";

    mysqli_select_db($connection,$database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected Successfully.";
    }            

    $query = mysqli_query($connection,"INSERT $table (DIA,PROFESOR_Email) VALUES ('$dia','$email')");

    if (mysqli_errno($connection)==0){
    }else{
        if (mysqli_errno($connection)==1062){                    
            echo "Se ha añadido un nuevo campo";  
            header("Location: ../calendario.php");            
            exit;
        }else{ 
           $numerror=mysqli_errno($connection);
           $descrerror=mysqli_error($connection);
           echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
        }
    }
    header("Refresh:0");
?>