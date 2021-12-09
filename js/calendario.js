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