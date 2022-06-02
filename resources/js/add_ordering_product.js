$(document).ready(function()  {
var base_url = $('#url').val();

  $('#wysokosc').on('keyup change', function() {
    var szerokosc = $('#szerokosc').val();
    if(szerokosc) {
      var value = $(this).val() * szerokosc;
      $('#size_ordering_product').val(parseFloat(value).toFixed(2));
    }
  });

  $('#szerokosc').on('keyup change', function() {
    var wysokosc = $('#wysokosc').val();
    if(wysokosc) {
      var value = $(this).val() * wysokosc;
      $('#size_ordering_product').val(parseFloat(value).toFixed(2));
    }
  });

  $("input[name=frendzle]").on('change', function() {
    if($(this).val() == "Tak") {
      $('#fredzle').removeClass('fredzle');
    } else {
      $('#fredzle').addClass('fredzle');
    }
  });




  $('.listener').on('keyup change',function() {
    var wysokosc = $('#wysokosc').val();
    var szerokosc = $('#szerokosc').val();
    var cena;
    var value = $('select#dywanySelect').val();
    $('select#dywanySelect').find('option').each(function() {
      if ($(this).val() == value) {
        cena=$(this).data('price');
      }
    });
    var fredzle = ($("input[name=frendzle]").val() != "Tak" || $('#dlugoscFrendzli').val() == '') ? false : $('#dlugoscFrendzli').val();
    var zapachy = $('#checkbox1').prop('checked') ? true : false;
    var antyalergiczne = $('#checkbox2').prop('checked') ? true : false;
    $('#price_ordering_product').val(parseFloat(calculate(wysokosc,szerokosc,cena,fredzle,zapachy,antyalergiczne)).toFixed(2));
  });

  function calculate(wysokosc, szerokosc, cena, fredzle, zapachy, antyalergiczny) {
    var price = wysokosc * szerokosc * cena;

    var multiplier = 1.0;
    multiplier += zapachy != false && 0.5;
    multiplier += antyalergiczny != false && 0.5;
    price *= multiplier;


    if (fredzle != false) {
      price += fredzle * 6;
    }

    return price;
  }

});
