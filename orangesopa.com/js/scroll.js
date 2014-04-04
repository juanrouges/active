$(document).bind("scroll", function () {

    var $withbar = $('#navbar-logo .withbar'),
        $nobar = $('#navbar-logo .nobar'),
        $navbar = $('.nav, .navbar'),
        $button = $('a.social');
    var scroll_pos = $(this).scrollTop();
    console.log(scroll_pos);

    if (scroll_pos > 210) {
        $navbar.addClass('scrolled');
        $button.addClass('scrolled');
        $nobar.fadeOut(function () {
            $nobar.css('display', 'none');
            $withbar.fadeIn().css('display', 'block');
        }); // image swap
    } else {
        $navbar.removeClass('scrolled');
        $button.removeClass('scrolled');
        $withbar.fadeOut(function () {
            $withbar.css('display', 'none');
            $nobar.fadeIn().css('display', 'block');
        }); // image swap
    }
});