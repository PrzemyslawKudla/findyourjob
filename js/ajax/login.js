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
                url: "http://findyourjob.dev/public/api/login",
                dataType: 'json',
                success: function (json) {
                    console.log(json);
                    console.log('Przed ');
                    if (json.code >= 200 && json.code < 300 && json.data.rights === "user") {
                        console.log('1');
                        window.location.href = '/view/home.php';
                    }
                    else if(json.code >= 200 && json.code < 300 && json.data.rights === "admin"){
                        console.log('2');
                        window.location.href = '/view/admin.php';
                    }
                    else if(json.code = 111) {
                        console.log('3');
                        window.location.href = '/view/home.php';
                    }
                    console.log('Po');
                },
                complete: function () {
                    console.log('Complete mdfvwefgb');
                },
                error: function () {
                    console.log('Error dsgu sgb gbjhadhfbsrej rgb jsrgb Ah ');
                }
            });
        }
        else {
            console.log("Uzupełnij wszystkie pola");
        }
    });

});