$(document).ready(function() {
	var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid'],
      header: {
        left: 'prev,next',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      selectable:true,
      contentHeight: 350,
      editable: false,
      navLinks: true, 
      eventLimit: true, 
      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      },
      dateClick:function(info){
      	alert(info.dateStr);
      }
    });

    calendar.render();
});
