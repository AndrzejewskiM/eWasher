$(document).ready(function() {

  var date_last_clicked = null;
  var base_url = $('#base_url').val();
  $('#calendar').fullCalendar({
    header:
    {
    left: 'prev,next today',
    center: 'title',
    right: ''
    },
      eventSources: [
          {
              events: function(start, end, timezone, callback) {
                  $.ajax({
                  url:  base_url+"/Calendar/get_events",
                  dataType: 'json',
                  data: {
                  // our hypothetical feed requires UNIX timestamps
                  start: start.unix(),
                  end: end.unix(),
                  },
                  success: function(msg) {
                      var events = msg.events;
                      console.log(events);
                      callback(events);
                    }
              });
         },
          textColor: 'white'
      },
      ],
      dayClick: function(date, jsEvent, view) {
          $('#addModal').modal();
          $('#start_date').val(moment(date).format('YYYY-MM-DD HH:mm'));
          $("#start_date, #end_date, #start_date_edit,#end_date_edit ").datetimepicker({
                });
      },
      eventClick: function(event, jsEvent, view) {
          $('#name').val(event.title);
          $('#description').val(event.description);
          $('#start_date_edit').val(moment(event.start).format('YYYY-MM-DD HH:mm'));
          if(event.end) {
            $('#end_date_edit').val(moment(event.end).format('YYYY-MM-DD HH:mm'));
          } else {
            $('#end_date_edit').val(moment(event.start).format('YYYY-MM-DD HH:mm'));
          }
          $('#event_id').val(event.id);
          $('#editModal').modal();
        },
        eventRender: function(event, element) {
          console.log(event);
          var div = $('<div>' + event.worker.name_worker + ' ' + event.worker.surname_worker + ' ' + '<br></br>'+ event.description + '</div>');
          return $(element).append(div);
        }
  });

  $(".color option").each(function()
{
  $(this).css("background-color", $(this).val());
});

  $(".color").on('change', function()
  {
    $(this).css("background-color", $(this).val());
  });
});
