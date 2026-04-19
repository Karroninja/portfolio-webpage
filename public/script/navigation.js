"use strict";

// reusable function to close the nav
function closeNav() {
    $('.fa').removeClass('fa-times').addClass('fa-bars');
    $('.normal-nav ul').css({ height: '0px' });
}

// hamburger toggle
$('.nav-toggle').on('click', function () {
    const $icon = $(this).find('.fa');
    if ($icon.hasClass('fa-bars')) {
        $icon.toggleClass('fa-bars fa-times');
        $('.normal-nav ul').css({ height: '170px' });
    } else {
        closeNav();
    }
});

// close nav and reset icon when a link is clicked
$('.normal-nav a').on('click', function () {
    closeNav();
});


/**
 * On mobile version,
 * Hide navbar when scrolling down, show when scrolling up.
 */
let didScroll;
let lastScrollTop = 0;
let delta = 5;
let navbarHeight = $('.navbar').outerHeight();
// On scroll, let the interval function know the user has scrolled
$(window).scroll(function() {
    didScroll = true;
})

setInterval(() => {
    if (didScroll) {
        const st = $(window).scrollTop();

        if (Math.abs(lastScrollTop - st) <= delta) {
            didScroll = false;
            return;
        }

        if (st > lastScrollTop && st > navbarHeight) {
            // scrolling down
            $('.navbar').removeClass('nav-down').addClass('nav-up');
            closeNav();
        } else {
            // scrolling up — always show navbar
            $('.navbar').removeClass('nav-up').addClass('nav-down');
        }

        didScroll = false;
        lastScrollTop = st;
    }
}, 250);