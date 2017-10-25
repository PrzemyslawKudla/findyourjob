$(document).ready(function () {

    var btn = document.getElementById("get-user-by-id");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://findyourjob.dev/public/api/user/1",
            dataType : 'text',
            success: function(json) {
                console.log(json);
                console.log('success');
            },
            complete: function() {
                console.log('completed');
            },
            error: function () {
            }

        });

    });

});