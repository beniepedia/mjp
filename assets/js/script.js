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
    });
}(jQuery));