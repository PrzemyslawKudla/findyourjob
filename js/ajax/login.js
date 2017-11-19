$(document).ready(function () {

    var btn = document.getElementById("login-button");

    btn.addEventListener("click", function (event) {
        event.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();

        $.ajax({
            type: "POST",
            cash: false,
            data: {
                'login' : login,
                'password' : password
            },
            url: "http://findyourjob.dev/public/api/login",
            dataType : 'json',
            success: function(json) {
                console.log(json);
            },
            complete: function() {
            },
            error: function () {
            }
        });
        return false;
    });
});