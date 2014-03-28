/**
* zoom.js is a JS enabling magnifying glass effect on product images and gallery effect.
*/
$( document ).ready(function() {
    $("#prod-img").elevateZoom({tint:true, tintColour:'#ccc', tintOpacity:0.5, zoomWindowFadeIn: 500, zoomWindowFadeOut: 500, lensFadeIn: 200, lensFadeOut: 300, easing : true});

    $(".product-image-thumbnails a").click(function(event) {
        event.stopPropagation();
        $("#prod-img").attr("src", $(this).attr("data-zoom-image"));
        // Add zoom to the new image
        $("#prod-img").elevateZoom({tint:true, tintColour:'#ccc', tintOpacity:0.5, zoomWindowFadeIn: 500, zoomWindowFadeOut: 500, lensFadeIn: 200, lensFadeOut: 300, easing : true});
        // prevent href
        return false;
    });
});