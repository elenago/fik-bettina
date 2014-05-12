/**
* zoom.js is a JS enabling magnifying glass effect on product images and gallery effect.
*/
$(window).load(bettinazoom);
$(window).resize(function(){$(".zoomContainer").remove(); bettinazoom();});

function bettinazoom() {
    if($(window).width() < 993) return false;
    // Add zoom to the new image
    $("#prod-img").elevateZoom({responsive: true, scrollZoom:true, gallery:'thumbnails-gallery', zoomWindowWidth:$("#prod-img").width(), zoomWindowHeight:$("#prod-img").height(), zoomWindowOffetx: 15, tint:true, tintColour:'#ccc', tintOpacity:0.5, zoomWindowFadeIn: 500, zoomWindowFadeOut: 500, lensFadeIn: 200, lensFadeOut: 300, easing : true});

    $(".product-image-thumbnails a").click(function(event) {
        event.preventDefault();
        if($(window).width() < 993) return false;
        $("#prod-img").attr("src", $(this).attr("data-zoom-image"));
        $("#prod-img").data("zoom-image", $(this).data("zoom-image"));
    });

    //pass the images to Fancybox
    $("#fullsizeicon").bind("click", function(e) {
        var ez = $('#prod-img').data('elevateZoom');
        $.fancybox(ez.getGalleryList(), {
            padding    : 0,
            margin     : 5,
            nextEffect : 'fade',
            prevEffect : 'none',
            afterLoad  : function () {
                $.extend(this, {
                    aspectRatio : true,
                    type    : 'html',
                    width   : '100%',
                    content : '<div class="fancybox-image" style="background-image:url(' + this.href + '); background-size: cover; background-position:50% 50%;background-repeat:no-repeat;height:100%;width:100%;" /></div>'
                });
            }
        });
    });
}

