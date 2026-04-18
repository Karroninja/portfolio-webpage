// Initial colors
let backgroundColor = '#349891ff'; // Wavy Teal
let textColor = '#f5fffa'; // Fresh Light Start Mint

const sections = {
    collab:    $('#collab').offset().top,
    projects:  $('#projects').offset().top,
    abilities: $('#abilities').offset().top,
    intro:     250
};

// console.log(sections);

function handleScroll() {
    const scroll     = $(window).scrollTop();
    const collab     = $('#collab').offset().top;
    const projects   = $('#projects').offset().top;
    const abilities  = $('#abilities').offset().top;

    if (scroll >= collab - 100) {
        // Collab section
        backgroundColor = '#1c4587ff';       // Confident Navy
        textColor = '#c9ffb8';               // Fresh Start Mint
    } else if (scroll >= projects - 100) {
        // Projects section
        backgroundColor = '#349891ff';       // Wavy Teal
        textColor = '#f5fffa';               // Fresh Light Start Mint
    } else if (scroll >= abilities - 100) {
        // Abilities section
        backgroundColor = '#ffad83ff';       // Calm Peach
        textColor = '#1c4587ff';             // Confident Navy
    } else if (scroll >= 250) {
        // Intro section
        backgroundColor = '#1c4587ff';       // Confident Navy
        textColor = '#c9ffb8';               // Fresh Start Mint
    } else {
        // Top of page
        backgroundColor = '#349891ff';       // Wavy Teal
        textColor = '#f5fffa';               // Fresh Light Start Mint
    }

    // Apply the colors to the elements
    $('body').css({
        'background-color': backgroundColor,
        'color': textColor
    });
    $('.navbar a:not(.logo a)').on('mouseenter', function() {
        $(this).css('color', backgroundColor);
    }).on('mouseleave', function() {
        $(this).css('color', '');
    });

    // background: textColor, text: backgroundColor
    $('.contact-info, .projectdiv .card-back, .collab-inner, .btn, .btn.collab-submit').css({
        'background-color': textColor,
        'color': backgroundColor
    });

    // background: backgroundColor, text: textColor
    $('.about-me').css({
        'background-color': backgroundColor,
        'color': textColor
    });

    // color: backgroundColor only
    $('.projectdiv .card-back a, .collab .collab-detail i, .collab .collab-detail a').css({
        'color': backgroundColor
    });

    $('.diamond.filled').css({
        '--diamond-filled': textColor
    });

    // color: textColor only
    $('.show-more-btn, .collab-form label').css({
        'color': textColor
    });

    // border color: textColor
    $('.collab-form input, .collab-form textarea, .collab-form select')
    .on('focus', function() {
        $(this).css('border-color', textColor);
    })
    .on('blur', function() {
        $(this).css('border-color', ''); // back to default on unfocus
    });

    // individual styles that don't group
    $('.main--me').css('border', '1em solid ' + textColor);
    $('.show-more-btn').css('border', '1px solid ' + textColor);
    $('.collab .collab-form').css('background-color', backgroundColor);
}

// Add scroll event listener and call once on load
$(document).ready(function () {
    $(window).on('scroll', handleScroll);
    handleScroll(); // Set initial colors on load

    // To clean up:
    // $(window).off('scroll', handleScroll);
});