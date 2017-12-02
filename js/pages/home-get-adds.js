jQuery(function ($) {
        getAllAdds();
    function getAllAdds() {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://findyourjob.dev/public/api/advertisement",
            dataType : 'json',
            success: function(json) {
                console.log(json);
            },
            complete: function() {
                console.log('completed');
            },
            error: function () {
                console.log('Error');
            }

        });
    }


    function createTableHead() {

    }

    function createTableRow(json) {

    }

});
