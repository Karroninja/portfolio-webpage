'use strict';

$('.about-me').mouseover(function() {
    $('.arrow').css({
        animation: "arrowin 1.5s forwards"
    })
})

$('.about-me').mouseleave(function() {
    $('.arrow').css({
        animation: "arrowout 1.5s forwards"
    })
})

$('.skills table tr').mouseover(function() {
    $(this).find(".filled").css({
        color: "var(--accent-color)"
    })
})

$('.skills table tr').mouseleave(function() {
    $(this).find(".filled").css({
        color: "var(--alt-accent-color-blue)"
    })
})
