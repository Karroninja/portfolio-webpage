"use strict";

$(document).ready(function () {
    $('#collab-form').on('submit', function (e) {
        e.preventDefault(); // stops the form from reloading the page

        const name    = $('#collab-name').val().trim();
        // const email   = $('#collab-email').val().trim();
        const email = "hello@klindroos.se";
        const subject = $('#collab-subject').val();
        const message = $('#collab-message').val().trim();
        const $fb     = $('#collab-feedback');

        $fb.removeClass('success error').hide();

        if (!name || !email || !message) {
            $fb.addClass('error').text('Please fill in your name, email and message.').show();
            return;
        }

        $.ajax({
            url: 'send-mail.php',
            method: 'POST',
            data: { name, email, subject, message },
            success: function (res) {
                // console.log('Response from PHP:', res);
                if (res === 'ok') {
                    $fb.addClass('success').text('Thanks! Your message has been sent.').show();
                    $('#collab-name, #collab-email, #collab-message').val('');
                    $('#collab-subject').val('');
                } else {
                    $fb.addClass('error').text('Something went wrong. Please try again.').show();
                }
            },
            error: function () {
                $fb.addClass('error').text('Could not send the message. Please try again later.').show();
            }
        });
    });
});