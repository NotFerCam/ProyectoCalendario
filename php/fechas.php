<?php
    $primera = $_REQUEST['primera'];
    $secundaria = $_REQUEST['secundaria'];

    $connection = mysqli_connect("localhost","root","toor");
    $database = "calendario";
    $table = "vacaciones";

    mysqli_select_db($connection,$database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected Successfully.";
    }
    
    session_start();
    $email = $_SESSION['email'];

    //echo($primera." ".$secundaria);


    function comprobarDias($connection,$table,$email){
        $diastotales = mysqli_query($connection,"SELECT COUNT(*) FROM $table WHERE PROFESOR_Email = '$email'");
        while ($registro = mysqli_fetch_row($diastotales)){
            foreach($registro as $clave){
                if($clave==14){
                    return false;
                }else{
                    return true;
                }
            }
        }
    }    
    
    if($secundaria==""){        
        if(comprobarDias($connection,$table,$email)==true){
            $query = mysqli_query($connection,"INSERT $table (DIA,PROFESOR_Email) VALUES ('$primera','$email')");
            header("Location: ../pedidaVac.php");
            exit;
        }else{
            echo("Ya has pedido el maximo de dias permitidos");
        }                            
    }else{
        if(comprobarDias($connection,$table,$email)==true){
            $dias = getDatesFromRange($primera,$secundaria);        
            foreach ($dias as &$valor) {
                $query = mysqli_query($connection,"INSERT $table (DIA,PROFESOR_Email) VALUES ('$valor','$email')");
            }
            header("Location: ../pedidaVac.php");
            exit;            
        }else{
            echo("Ya has pedido el maximo de dias permitidos");
        }
    }
    
    if (mysqli_errno($connection)==0){
    }else{
        if (mysqli_errno($connection)==1062){
            
        }else{ 
           $numerror=mysqli_errno($connection);
           $descrerror=mysqli_error($connection);
           echo "Se ha producido un error nº $numerror que corresponde a: $descrerror  <br>";
        }
    }
    
    function getDatesFromRange($start, $end, $format = 'Y-m-d') {
        $array = array();
        $interval = new DateInterval('P1D');
    
        $realEnd = new DateTime($end);
        $realEnd->add($interval);
    
        $period = new DatePeriod(new DateTime($start), $interval, $realEnd);
    
        foreach($period as $date) { 
            $array[] = $date->format($format); 
        }
    
        return $array;
    }

    mysqli_close($connection);
    //header("Refresh:0");
    
?>