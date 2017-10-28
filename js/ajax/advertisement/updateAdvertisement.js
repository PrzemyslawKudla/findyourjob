$(document).ready(function () {

    var btn = document.getElementById("update-ad");

    btn.addEventListener("click", function () {
        $.ajax({
            type: "PUT",
            cash: false,
            data: {
                'advertisement_id' : 15,
                'title' : 'Updated title',
                'description' : 'updated description',
                'salary' : '2000 - 8000 PLN',
                'category_id' : 1,
                'localization_id' : 2
            },
            url: "http://findyourjob.dev/public/api/advertisement",
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