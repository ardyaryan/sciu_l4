$( document ).ready(function() {

    $('#login').on('click', function (e) {
        e.preventDefault();
        var userName = $('#user_name').val();
        var password = $('#password').val();

        $.ajax({
            url: 'login',
            type: 'POST',
            data: {
                password: password,
                user_name: userName
            },
            success: function(results) {
                if (results.success === true) {
                    location.reload();
                } else {
                    $('#login_message').text('Username or Password invalid!');
                }
            },
        });
    })
});