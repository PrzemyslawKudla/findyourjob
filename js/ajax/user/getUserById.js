$(document).ready(function () {

    var btn = document.getElementById("get-user-by-id");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://przem94.ayz.pl/findYourJob/public/api/user/1",
            dataType : 'json',
            success: function(json) {
                console.log(json);
            },
            complete: function() {
            },
            error: function () {
            }

        });

    });

});