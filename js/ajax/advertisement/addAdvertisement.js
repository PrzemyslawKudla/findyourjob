$(document).ready(function () {

    var btn = document.getElementById("add-ad");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "POST",
            cash: false,
            data: {
                'title' : 'Advertisement title',
                'description' : 'ad description',
                'salary' : '5000 - 10000 PLN',
                'user_id' : '1',
                'category_id' : '1',
                'localization_id' : 1
            },
            url: "http://przem94.ayz.pl/findYourJob/public/api/advertisement",
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