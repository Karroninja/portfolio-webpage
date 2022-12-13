"use strict";

// Change menu whenever user resized the window to under or above 767 px.
$(window).on("resize", function() {
    let windowWidth = $(window).width();
    let hamburgerIcon = $(".nav-toggle i").attr("class");
    if (windowWidth <= 767) {
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
            $(".normal-nav").css({ display: "block" });
        } else {
            if ($(".normal-nav").css("display") == "block") {
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

