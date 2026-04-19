"use strict";

function initScrollTop() {
    const isMobile = $(window).width() < 768;

    $('#scroll-top').off('click.scrolltop touchend.scrolltop');
    $(window).off('scroll.scrolltop');

    let isScrolling = false;

    if (isMobile) {
        $('#scroll-top').css('display', 'flex');

        $(window).on('scroll.scrolltop', function () {
            if ($(this).scrollTop() > 300) {
                $('#scroll-top').addClass('visible');
            } else {
                $('#scroll-top').removeClass('visible');
            }
        });

        $('#scroll-top').on('click.scrolltop touchend.scrolltop', function (e) {
            e.preventDefault();
            if (isScrolling) return;
            isScrolling = true;
            $('html, body').animate({ scrollTop: 0 }, 500, function() {
                isScrolling = false;
            });
        });

    } else {
        $('#scroll-top').css('display', 'none');
    }
}

$(document).ready(function () {
    initScrollTop();
    $(window).on('resize', function () {
        initScrollTop();
    });
});