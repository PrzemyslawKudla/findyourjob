$(document).ready(function () {
    var btn = document.getElementById("delete-ad");
    btn.addEventListener("click", function () {
        $.ajax({
            type: "DELETE",
            cash: false,
            url: "http://findyourjob.dev/public/api/advertisement/2",
            dataType : 'text',
            success: function(json) {
                console.log(json);
            },
            complete: function() {
                console.log('completed');
            },
            error: function () {
            }
        });

    });

});