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
  $("h3:contains('Tu carrito de la compra está vacío')").html('Tu cesta de la compra está vacía. Visita <a href="/" style="text-decoration:underline">la tienda</a> y añade unos cuantos productos.');
  $("p:contains('Visita la tienda y')").hide();

  $('.carousel').carousel();
});
