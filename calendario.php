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
    <style>             
        #calendar{
            width: 1000px;            
        }
    </style>
</head>
<body>
    <div class="nav">
        <img src="img/mycalendar.png" class="logo">
    </div>
    <div class="contenedor">
        <div id='calendar'></div>
    </div>   
    <button><a href="pedidaVac.php">Enviar</a></button> 
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        selectable: true,
        editable: true,        
        initialView: 'dayGridMonth',
        height: 700,
        events:'php/load.php',        
        /*dateClick: function(info) {
            $.ajax({
                url:'php/eventos.php',
                type:'POST',
                data:{
                    email: localStorage.getItem("email"),
                    dia: info.dateStr
                }
            });                  
        },*/
        /*eventClick:function(event){
            if(confirm("¿Deseas eliminar este evento?")){
                var id = event.email;

                $.ajax({
                    url:'php/delete.php',
                    method:'POST',
                    data:{email:id},
                })
            }
        }*/  
    });

    calendar.render();
});
</script>
</html>