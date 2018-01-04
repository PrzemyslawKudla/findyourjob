$(document).ready(function () {

    var btn = document.getElementById("get-ad");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://przem94.ayz.pl/findYourJob/public/api/advertisement/1",
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