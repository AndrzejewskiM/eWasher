$(document).ready(function()  {
var base_url = $('#url').val();
  var dywany;
  $.ajax({
    url:  base_url+"/Main/getDywany",
    type: 'POST',
    dataType: 'JSON',
    success: function(data) {
      dywany = data;
      console.log(data);
    },
    error: function(data) {
      console.log(data);
    }
  });

  $('#wysokosc').on('input', function(event) {
    var value = Number($(this).val());
    if(isNaN(value) || value < 0) {
      event.preventDefault();
      return false;
    }
    console.log(value);
  });

  $('#calculateButton').on('click', function() {
    var wysokosc = $('#wysokosc').val();
    var szerokosc = $('#szerokosc').val();
    var selectedDywanId = $('#dywanySelect').val();
    var cenaDywanu = dywany.find(x => x.id_product == selectedDywanId)['price_for_meter'];
    var cenaKoncowa = wysokosc * szerokosc * cenaDywanu;
    var dodatkowaCena = 1.0;
    if($('#checkbox1').prop('checked')) {
      dodatkowaCena += 0.5;
    }
    if($('#checkbox2').prop('checked')) {
      dodatkowaCena += 0.5;
    }
    cenaKoncowa = cenaKoncowa * dodatkowaCena;
    var frendzle = $("input[name=frendzle]:checked").val()
    var dlugoscFrendzli = $('#dlugoscFrendzli').val();
    if(frendzle == 'Tak') {
      cenaKoncowa += dlugoscFrendzli * 6;
    }
    Swal({text: 'Cena wynosi ' + cenaKoncowa + ' zł'});
  })
});
