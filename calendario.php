<!DOCTYPE html>
<html lang='es' class="contenedor">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">          
    <link href="fullcalendar/calendario.css" rel="stylesheet">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <link href="fullcalendar/calendario.css" rel="stylesheet">
    <script src='fullcalendar/main.js'></script>
    <script src="fullcalendar/locales-all.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>  
    <link href="css/nav.css" rel="stylesheet" type="text/css">
    <link href="css/calendario.css" rel="stylesheet" type="text/css">
</head>
<body>    
    <nav class="nav">
        <img src="img/mycalendar.png" class="logo">
        <div class="center">
            <a href="index.php">Cerrar Sesion</a>
        </div>    
    </nav>
    <div class="contenedor">
        <h1 id="bienvenida">Bienvenid@: <a id="texto"></a></h1>
        <div id='calendar'></div>
    </div>   
    <button class="botonvac"><a href="pedidaVac.php">Pedir Días</a></button> 
</body>
<script src="js/calendario.js"></script>
</html>