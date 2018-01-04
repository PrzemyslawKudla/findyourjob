"use strict";

$(document).ready(function () {

    var btn = document.getElementById("button-log-out");

    btn.addEventListener("click", function (event) {
        event.preventDefault();
            $.ajax({
                type: "POST",
                cash: false,
                url: "http://findyourjob.local/public/api/logout",
                dataType: 'json',
                success: function (json) {
                   // console.log(json);
                    window.location.href = 'findYourJob/view/login.php';
                },
                complete: function () {
                },
                error: function () {
                }
            });
    });
});