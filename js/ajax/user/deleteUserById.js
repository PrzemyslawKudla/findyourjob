$(document).ready(function () {
    var btn = document.getElementById("delete-user-by-id");
    btn.addEventListener("click", function () {
        $.ajax({
            type: "DELETE",
            cash: false,
            url: "http://findyourjob.dev/public/api/user/2",
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