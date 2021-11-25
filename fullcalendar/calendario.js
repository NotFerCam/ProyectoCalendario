document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        selectable: true,
        initialView: 'dayGridMonth',
        height: 700,
        dateClick: function(info) {
            alert('clicked ' + info.dateStr);
            localStorage.setItem("diap",info.dateStr),
            calendar.addEvent({
                title: "Dida pedido por: "+localStorage.getItem("email"),
                start: info.dateStr,
                allDay: true
            });
        }             
    });

    calendar.render();
});