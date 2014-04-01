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
});
