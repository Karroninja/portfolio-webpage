"use strict";

// When hamburger is clicked ...
$('.nav-toggle').on("click", function() {
    // Change hamburger menu from bars to cross.
    let hamElementBars = $(this).find(".fa-bars");
    if (hamElementBars.hasClass("fa-bars")) {
        hamElementBars.toggleClass("fa-bars fa-times");
        $(".normal-nav ul").css({ height: "170px" });
    } else {
        let hamElementCross = $(this).find(".fa-times");
        if (hamElementCross.hasClass("fa-times")) {
            hamElementCross.toggleClass("fa-times fa-bars");
        }
        $(".normal-nav ul").css({ height: "0px" });
    }
})

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
        // get the value of how much is scrolled, on top the value is 0
        let st = $(this).scrollTop();

        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll down
            $('.navbar').removeClass('nav-down').addClass('nav-up');
            if ($('.fa').hasClass("fa-times")) {
                $('.fa').toggleClass("fa-times fa-bars");
                $(".normal-nav ul").css({ height: "0px" });
            }
        } else {
            // Scroll up
            $('.navbar').removeClass('nav-up').addClass('nav-down');
        }
        didScroll = false;
        lastScrollTop = st;
    }
}, 250);