$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
var myDate = new Date();

$("#creation_date").datepicker({
    dateFormat: 'yy-mm-dd',
    maxDate: 'today',
    onSelect: function() {
      var date = moment($('#creation_date').datepicker( "getDate" ));
      $("#date_of_receipt").datepicker( "option", "minDate", date.toDate());
    }
});
$('#creation_date').datepicker('setDate', myDate);



var myDate = new Date();
var date = $('#date_of_receipt').datepicker({
  dateFormat: 'yy-mm-dd',
  onSelect: function() {
    var date = moment($('#date_of_receipt').datepicker( "getDate" ));
    $("#delivery_date").datepicker( "option", "minDate", date.toDate());
  }
});

$("#delivery_date").datepicker({
  dateFormat: 'yy-mm-dd'
});
