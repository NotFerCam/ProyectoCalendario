<!DOCTYPE html>
<html lang='es' class="contenedor">
<head>
    <meta charset='utf-8' />
    <link href="fullcalendar/calendario.css" rel="stylesheet">
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <link href="fullcalendar/calendario.css" rel="stylesheet">
    <script src='fullcalendar/main.js'></script>
    <script src="fullcalendar/locales-all.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>    
    <style>             
        #calendar{
            width: 1000px;            
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div id='calendar'></div>
    </div>    
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
        dateClick: function(info) {
            $.ajax({
                url:'php/eventos.php',
                type:'POST',
                data:{
                    email: localStorage.getItem("email"),
                    dia: info.dateStr
                }
            });                  
        },
        eventClick:function(event){
            if(confirm("¿Deseas eliminar este evento?")){
                var id = event.id;

                $.ajax({
                    url:'php/delete.php',
                    method:'POST',
                    data:{id:id},
                })
            }
        }             
    });

    calendar.render();
});
</script>
</html>