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
