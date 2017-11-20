"use strict";

$(document).ready(function () {


    function checkInput(value) {
        return value !== "";
    }

    function showWarning(login, email, password, password2, name, surname) {
        if (!checkInput(login)) {
            $('.login-required').addClass('d-block');
        }
        else {
            $('.login-required').removeClass('d-block');
        }
        if (!checkInput(email)) {
            $('.email-required').addClass('d-block');
        }
        else {
            $('.email-required').removeClass('d-block');
        }
        if (!checkInput(password)) {
            $('.password-required').addClass('d-block');
        }
        else {
            $('.password-required').removeClass('d-block');

        }
        if (!checkInput(password2)) {
            $('.password2-required').addClass('d-block');
        }
        else {
            $('.password2-required').removeClass('d-block');
        }
        if (!checkInput(name)) {
            $('.name-required').addClass('d-block');
        }
        else {
            $('.name-required').removeClass('d-block');
        }
        if (!checkInput(surname)) {
            $('.surname-required').addClass('d-block');
        }
        else {
            $('.surname-required').removeClass('d-block');

        }

    }

    var btn = document.getElementById("register-button");

    btn.addEventListener("click", function (event) {
        event.preventDefault();
        var login = $('#login').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();
        var name = $('#userName').val();
        var surname = $('#userSurname').val();
        var email = $('#email').val();
        showWarning(login, email, password, password2, name, surname);
        if (checkInput(login) && checkInput(password) && checkInput(password2)
            && checkInput(name) && checkInput(surname) && checkInput(email)) {
            $.ajax({
                type: "POST",
                cash: false,
                data: {
                    'login': login,
                    'password1': password,
                    'password2': password2,
                    'email': email,
                    'name': name,
                    'surname': surname
                },
                url: "http://findyourjob.dev/public/api/register",
                dataType: 'json',
                success: function (json) {
                    console.log(json);
                    if (json.code >= 200 && json.code < 300) {
                        window.location.href = '/view/login.php';
                    }
                    else {
                        alert(json.message);
                    }
                },

                complete: function () {
                },
                error: function () {
                }
            });
        }
        else {
            console.log("error");
            console.log(login + ' ' + password + ' ' + password2 + ' ' + email + ' ' + name + ' ' + surname);

        }
        return false;
    });
});