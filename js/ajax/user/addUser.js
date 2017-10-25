$(document).ready(function () {

    var btn = document.getElementById("add-user");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "POST",
            cash: false,
            data: {
                'login' : 'Antonia',
                'password' : 'q1w2e3r4t5',
                'name' : 'Stefan',
                'surname' : 'Batory',
                'email' : 'email@wp.pl',
                'rights' : 2,
                'status' : 1
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