$(document).ready(function () {

    var ajaxContainer = document.getElementById("ajax-container");
    var btn = document.getElementById("get-data");
    var formElement = document.querySelector("form");
    var formData = new FormData(formElement);

    btn.addEventListener("click", function () {
        $.ajax({
            type: "POST",
            cash: false,
            url: "http://przem94.ayz.pl/projectAI/public/api/user",
            dataType : 'json',
            data: {
                someVar1 : 'LoremIpsum',
                someVar2 : 210
            },
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

    function renderHTML(data) {
        var dataString = "";
        for (i = 0; i < data.data.length; i++) {
            dataString += "<p>" + data.data[i].name + "</p>";
        }
        ajaxContainer.insertAdjacentHTML("beforeend", dataString);
    }
});