// Przycisk do wyciagania menu
$(document).ready(function()  {
  $("menu-icon").on("click", function() {
    $("nav ul").toogleClass("showing");
  });
});

// Efekt Scrollowania

$(window).on("scroll", function() {
  if($(window).scrollTop()) {
    $('nav').addClass('black');
  }
  else {
    $('nav').removeClass('black');
  }
});
