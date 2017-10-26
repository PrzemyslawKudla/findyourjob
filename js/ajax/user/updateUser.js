$(document).ready(function () {

    var btn = document.getElementById("update-user");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "PUT",
            cash: false,
            data: {
                'name' : 'Romek',
                'surname' : 'Sromek',
                'email' : 'emailek@wp.pl',
                'id' : 7
            },
            url: "http://findyourjob.dev/public/api/user",
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