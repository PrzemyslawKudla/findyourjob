$(document).ready(function () {

    var btn = document.getElementById("update-user");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "PUT",
            cash: false,
            data: {
                'name' : 'Anna',
                'surname' : 'Dworniak',
                'email' : 'emailek@wp.pl',
                'id' : 9
            },
            url: "http://findyourjob.local/public/api/user",
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