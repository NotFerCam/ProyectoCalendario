<?php
    //$connection = mysqli_connect("localhost","root","toor");
    $connection = new PDO("mysql:host=localhost;dbname=calendario","root","toor");
    
    $data = array();

    $query = "SELECT * FROM vacaciones ORDER BY DIA";

    $statement = $connection -> prepare($query);

    $statement -> execute();

    $result = $statement -> fetchAll();

    foreach($result as $row){
        $data[] = array(
            'title' => $row['PROFESOR_Email'],
            'start' => $row['DIA']            
        );
        
    }

    echo json_encode($data);
?>