;
(function ($) {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $("#back-top").fadeIn();

        } else {
            $("#back-top").fadeOut();
        }
    });



    $("#back-top span").click(function () {
        $("body,html").animate({
            scrollTop: 0
        }, 300);
        return false;
    });

    var methods = {
        init: function () {
            //menu hover
            // $('ul.nav li.dropdown').hover(function () {
            //     $(this).find('.dropdown-menu').stop().delay(50).fadeIn();
            // }, function () {
            //     $(this).find('.dropdown-menu').stop().delay(50).fadeOut();
            // });

            if ($('#fl_slider').length > 0) {
                $('.flexslider').flexslider({
                    animation: "slide",
                    directionNav: false
                });
                $('#content').fadeIn("slow");
            }

            if ($('.carousel').length > 0) {
                $(".carousel").carousel({interval: 7000});
            }
        },

        method: function () {

        }
    }

    $.fn.mainAppRun = function (method) {

        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || !method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Метод с именем ' + method + ' не существует для jQuery.tooltip');
        }

    };
})(jQuery);

