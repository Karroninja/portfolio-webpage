"use strict";

// Change menu whenever user resized the window to under or above 767 px.
$(window).on("resize", function() {
    // let windowWidth = $(window).width();
    let hamburgerIcon = $(".nav-toggle i").attr("class");
    if ($(window).width() <= 767) {
        // Show hamburger menu
        $('.nav-toggle').show();

        // Hide normal menu only when hamburger bars icon is showned
        if (hamburgerIcon == "fa fa-bars") {
            $('.normal-nav').hide();
        } else {
            $('.normal-nav').show();
        }
    } else {
        // Show normal menu
        $('.normal-nav').show();
        // Hide hamburger menu
        $('.nav-toggle').hide();
    }
});

if ($(window).width() <= 767) {
    // Show hamburger menu
    $('.nav-toggle').show();
    // Hide normal menu
    $('.normal-nav').hide();

    // When hamburger is clicked ...
    $('.nav-toggle').on("click", function() {
        // Change hamburger menu from bars to cross.
        let hamElementBars = $(this).find(".fa-bars");
        if (hamElementBars.hasClass("fa-bars")) {
            hamElementBars.toggleClass("fa-bars fa-times");
        } else {
            let hamElementCross = $(this).find(".fa-times");
            if (hamElementCross.hasClass("fa-times")) {
                hamElementCross.toggleClass("fa-times fa-bars");
            }
        }

        // Show or hide navigation content
        if ($(".normal-nav").css("display") == "none") {
            $(".normal-nav").css({ display: "flex" });
        } else {
            if ($(".normal-nav").css("display") == "flex") {
                $(".normal-nav").css({ display: "none"});
            }
        }
    })
} else {
    // Show normal menu
    $('.normal-nav').show();
    // Hide hamburger menu
    $('.nav-toggle').hide();
}

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

        // if (Math.abs(lastScrollTop - st) <= delta) {
        //     return;
        // }

        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll down
            $('.navbar').removeClass('nav-down').addClass('nav-up');
            if ($(".normal-nav").css("display") == "flex") {
                $(".normal-nav").css({ display: "none"});
            }
            if ($('.fa').hasClass("fa-times")) {
                $('.fa').toggleClass("fa-times fa-bars");
            }

        } else {
            // Scroll up
            $('.navbar').removeClass('nav-up').addClass('nav-down');
        }
        didScroll = false;
        lastScrollTop = st;
    }
}, 250);


