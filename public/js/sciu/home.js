$( document ).ready(function() {

    $('#newsletter').on('click', function (e) {
        e.preventDefault();
        var email = $('#email').val();

        $.ajax({
            url: '/newsletter',
            type: 'POST',
            data: {
                email: email
            },
            success: function(results) {
                if (results.success === true) {
                    $('#email').val(results.message)
                }
            },
        });
    })

    $('.comment').on('click', function () {
        $('#my-modal').modal('show');
    });

    $('#live_chat').on('click', function (e) {
        e.preventDefault();
        $('#my-modal').modal('show');
    });

    $('#chat_submit').on('click', function (e) {
        sendMessage();
        $('#my-modal').modal('hide');
    });
});

function sendMessage() {

    var email = $('#email').val();
    var message = $('#message').val();

    $.ajax({
        url: 'sendmessage',
        type: 'POST',
        data: {
            email: email,
            message: message
        },
        success: function(results) {
            if (results.success === true) {
                console.log('message sent');
            }
        },
    });
}