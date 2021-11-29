<?php
    $connection = mysqli_connect("localhost","root","toor");
    $database = "calendario";
    $table = "vacaciones";

    mysqli_select_db($connection,$database);
    echo($_REQUEST['delete']);

    $dia = $_REQUEST['delete'];

    $query = mysqli_query($connection,"DELETE FROM $table WHERE DIA = '$dia'");

    if (mysqli_errno($connection)==0){
    }else{
        if (mysqli_errno($connection)==1062){                    
            echo "Se ha eliminado el campo";              
        }else{ 
           $numerror=mysqli_errno($connection);
           $descrerror=mysqli_error($connection);
           echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
        }
    }
    
    header("Location: ../calendario.php");            
    exit;
?>