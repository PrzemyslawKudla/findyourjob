jQuery(function ($) {

    $.ajax({
        type: "GET",
        cash: false,
        url: "../public/api/localization/1",
        dataType: 'json',
        success: function (json) {
            console.log(json);
            function initMap() {
                var uluru = {lat: parseFloat(json.data[0].latitude), lng: parseFloat(json.data[0].longitude)};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
            initMap();
        },
        complete: function () {
        },
        error: function () {
        }
    });


});