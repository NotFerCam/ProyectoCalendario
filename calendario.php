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
    <link href="css/nav.css" rel="stylesheet" media="all">
</head>
<body>    
    <nav class="nav">
        <img src="img/mycalendar.png" class="logo">
        <div class="center">
            <p class="logout"><a href="index.php">Cerrar Sesion</a></p>   
        </div>        
    </nav>
    <div class="contenedor">
        <div id='calendar'></div>
    </div>   
    <button><a href="pedidaVac.php">Pedir Días</a></button> 
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            selectable: true,
            editable: true,     
            locale: 'es',   
            initialView: 'dayGridMonth',
            height: 700,
            events:'php/load.php',                
            eventClick:function(info, jsEvent, view){            
                if(confirm("¿Deseas eliminar este evento?")){
                    var id = info.event.startStr;
                    window.location = "php/delete.php?delete="+info.event.startStr+""            
                }
            }  
        });
        calendar.render();
    });
</script>
</html>