$(document).ready(function() {
  $('.sizes').hide();
  $('.shippings').hide();
  $('.sizesandshippingsmodaloverlay').hide();

  $('.sizesinformation').click(function(event) {
      event.preventDefault();
      $('.shippings').hide();
      $('.sizes').toggle();
      $('.sizesandshippingsmodaloverlay').toggle();
  });
  $('.shippingsinformation').click(function(event) {
      event.preventDefault();
      $('.sizes').hide();
      $('.shippings').toggle();
      $('.sizesandshippingsmodaloverlay').toggle();
  });
  $('.close').click(function(event) {
      $('.sizes').hide();
      $('.shippings').hide();
      $('.sizesandshippingsmodaloverlay').hide();
  });
  $('.sizesandshippingsmodaloverlay').click(function(event) {
      $('.close').click();
  });
  if($(":button[class='button alt btn btn-primary']").html() == 'Añadir al carrito') {
    $(":button[class='button alt btn btn-primary']").html('Añadir a la cesta');
  }
  $("option[value='']").html('?');
  $(".search-submit").html('buscar');
  $("h3.fik-cart-empty").html('Tu cesta de la compra está vacía.');
  $("p.fik-cart-empty").hide();

  $('.carousel').carousel();

  if(window.location.pathname == '/nuestra-tienda/') {
      $("li.nuestratienda a").addClass("active");
  } else {
      $("li.nuestratienda a").removeClass("active");
  }

  if(window.location.pathname == '/mas-informacion/') {
      $("li.masinformacion a").addClass("active");
  } else {
      $("li.masinformacion a").removeClass("active");
  }
});
