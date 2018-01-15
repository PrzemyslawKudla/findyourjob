"use strict";

$(document).ready(function () {


    function checkInput(value) {
        return value !== "";
    }

    function showWarning(login, password) {
        if(!checkInput(login)){
            $('.login-required').addClass('d-block');
        }
        else {
            $('.login-required').removeClass('d-block');

        }
        if(!checkInput(password)){
            $('.password-required').addClass('d-block');
        }
        else {
            $('.password-required').removeClass('d-block');

        }

    }

    var btn = document.getElementById("login-button");

    btn.addEventListener("click", function (event) {
        event.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();
        showWarning(login, password);
        if (checkInput(login) && checkInput(password)) {
            $.ajax({
                type: "POST",
                cash: false,
                data: {
                    'login': login,
                    'password': password
                },
                url: "http://przem94.ayz.pl/findYourJob/public/api/login",
                dataType: 'json',
                success: function (json) {
                    console.log(json);
                    if (json.code >= 200 && json.code < 300 && json.data.rights === "user") {
                        window.location.href = '/findYourJob/view/home.php';
                    }
                    else if(json.code >= 200 && json.code < 300 && json.data.rights === "admin"){
                        window.location.href = '/findYourJob/view/admin.php';
                    }
                    else if(json.code = 111) {
                        window.location.href = '/findYourJob/view/home.php';
                    }
                    else if(json.code < 200) {
                        alert(json.message);
                    }
                },
                complete: function () {
                },
                error: function () {
                    console.log("Error");
                }
            });
        }
        else {
            console.log("Uzupełnij wszystkie pola");
        }
    });

});