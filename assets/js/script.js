// Smooth Scrool

$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 50
    }, 1000);
});


// Hide Navbar

(function ($) {
    $(document).ready(function () {

        $(".Scrolling").hide();

        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.Scrolling').fadeIn();
                } else {
                    $('.Scrolling').fadeOut();
                }
            });
        });

        $(window).scroll(function() {
        ($(this).scrollTop() > ($('.Scrolling').height() + 200)) ? $('.back-to-top').addClass('cd-is-visible') : $('.back-to-top').removeClass('cd-is-visible cd-fade-out');
        }).trigger('scroll');

        $('.back-to-top').on('click', function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    });
}(jQuery));