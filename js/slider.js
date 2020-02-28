
    jQuery(window).ready(function(){
        jQuery('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
            jQuery('body').removeClass('loading');
        }
        });
    });
