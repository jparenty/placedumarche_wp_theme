var $ = jQuery.noConflict();
var laptopWidth = 1001;

var oldPageYOffset = 0;
$(window).scroll(function() {
    if (window.pageYOffset != oldPageYOffset) {
        oldPageYOffset = window.pageYOffset;
        w = document.documentElement.clientWidth || document.body.clientWidth || window.innerWidth;
        if (w >= laptopWidth) {
            $(".fade").each(function() {
                if ($(this).css("opacity")==0) {
                    $(this).fadeTo(750, 1);
                }
            });
        }
    }
    
}).scroll();