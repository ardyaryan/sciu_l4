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
});