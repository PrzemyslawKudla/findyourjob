$(document).ready(function () {
    var btn = document.getElementById("get-all-ads");
    btn.addEventListener("click", function () {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://findyourjob.local/public/api/advertisement",
            dataType : 'json',
            success: function(json) {
                console.log(json);
                console.log('success');
            },
            complete: function() {
                console.log('completed');
            },
            error: function (jqXHR, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                console.log(msg);
            }

        });
    });
});