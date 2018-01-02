$(document).ready(function () {

    var btn = document.getElementById("get-ad");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://findyourjob.local/public/api/advertisement/1",
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