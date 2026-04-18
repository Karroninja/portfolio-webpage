"use strict";

function setupExpandable(containerSelector, limit) {
    const $skills = $(containerSelector).find('.skill-div');

    $skills.each(function(i) {
        if (i >= limit) $(this).addClass('hidden-skill');
    });

    const $btn = $('<button class="show-more-btn">Show more ▾</button>');
    $(containerSelector).append($btn);

    let expanded = false;
    $btn.on('click', function() {
        expanded = !expanded;
        $skills.each(function(i) {
            if (i >= limit) $(this).toggleClass('hidden-skill', !expanded);
        });
        $(this).text(expanded ? 'Show less ▴' : 'Show more ▾');
    });
}

function initExpandable() {
    const isMobile = $(window).width() < 768;

    $('.show-more-btn').remove();
    $('.skill-div.hidden-skill').removeClass('hidden-skill');

    if (isMobile) {
        setupExpandable('.abilities-div .skills', 6);
        setupExpandable('.abilities-div .tools', 6);
    }
}

$(document).ready(function() {
    initExpandable();
    $(window).on('resize', initExpandable);
});