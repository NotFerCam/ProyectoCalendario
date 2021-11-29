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
    <style>
        .center{
            float: right;  
            width: 200px;
            padding: 10px;
            margin-top: 20px;
        }
        .center a{
            text-decoration: none;
            color: white;
            padding: 10px;
        }
        .botonvac{            
            background-color: grey;
            border: none;
            border-radius: 3px;            
            padding: 10px;
            box-shadow: rgb(129,0,71);
            margin-top: 15px;
            font-size: 15px;
        }
        .botonvac a{
            text-decoration: none;
            color: white;
        }
        
        @media (min-width: 1238px) {
            #calendar{
                height: 100%;
            }
        }
    </style>
</head>
<body>    
    <nav class="nav">
        <img src="img/mycalendar.png" class="logo">
        <div class="center">
            <a href="index.php.php">Cerrar Sesion</a>
        </div>    
    </nav>
    <div class="contenedor">
        <h1 id="bienvenida">Bienvenid@: <a id="texto"></a></h1>
        <div id='calendar'></div>
    </div>   
    <button class="botonvac"><a href="pedidaVac.php">Pedir Días</a></button> 
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {        
        document.getElementById("texto").textContent = localStorage.getItem("email");

        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            selectable: true,
            editable: true,     
            locale: 'es',   
            initialView: 'dayGridMonth',
            height: 700,
            events:'php/load.php',                
            eventClick:function(info, jsEvent, view){      
                if(localStorage.getItem("email")==info.event.title){
                    if(confirm("¿Deseas eliminar este evento?")){
                        var id = info.event.startStr;
                        window.location = "php/delete.php?delete="+info.event.startStr+""            
                    }
                }else{
                    alert("Solo puedes eliminar tus dias de vacaciones")
                }                      
            }  
        });
        calendar.render();
    });
</script>
</html>