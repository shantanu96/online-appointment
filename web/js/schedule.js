$(document).ready(function() {

    var d1,d2,date,startTime,endTime;
    $('#calendar').fullCalendar({
      	header: {
    			center: 'month,agendaDay' // buttons for switching between views
  			},
        eventClick: function(calEvent, jsEvent, view) {

          startTime = calEvent.start._i;
          endTime = calEvent.end._i;

          $("#modalBodyMsg").text("Will you like to take appointment");
    			$('#takeAppointmentModal').modal('toggle');
  			},
  			eventSources: [
  		    {
  		      url: '/petdoctor/web/controllers/Schedule.php?getSchedule=1',
  		      textColor: 'black'
  		    }
  		  ]
  	
    });


    $("#btnTakeAppointment").click(function(){
        $.ajax({
          url: "/petdoctor/web/controllers/Schedule.php", 
          type:"GET",
          data:{
            setAppointment:"1",
            start:startTime,
            end:endTime
          },
          success: function(result){
              // alert(result);
              location.reload();
          }

        });
    });

 });