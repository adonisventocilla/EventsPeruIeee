(function($) {
    "use strict"
    $("#metismenu").metisMenu();


    $(".nav-control").on('click', function() {
        $(".menu").slideToggle();
    });


})(jQuery);