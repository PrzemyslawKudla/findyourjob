jQuery(function ($) {
    var paramsURL = window.location.search.substring(1);
    var paramsArray = paramsURL.split('?');
    var addID = paramsArray[0].substring(3);
    var locID = paramsArray[1].substring(4);

    var lat = '';
    var long = '';

    $.ajax({
        type: "GET",
        cash: false,
        url: "../public/api/localization/" + locID,
        dataType: 'json',
        success: function (json) {
            console.log(json);
            lat = parseFloat(json.data[0].latitude);
            long = parseFloat(json.data[0].longitude);

            function initMap() {
                var uluru = {lat: parseFloat(json.data[0].latitude), lng: parseFloat(json.data[0].longitude)};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 13,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }

            initMap();
            getWeatherInfo();
        },
        complete: function () {
        },
        error: function () {
        }
    });

    getAdd();

    function getAdd() {
        $.ajax({
            type: "GET",
            cash: false,
            url: "../public/api/advertisement/" + addID,
            dataType: 'json',
            success: function (json) {
                console.log(json);
                $('.main-content').append(createSingleBox(json));
            },
            complete: function () {
                console.log('completed');
            },
            error: function () {
                console.log('Error');
            }

        });
    }


    function createSingleBox(json) {
        var box = '';
        for (i = 0; i < json.data.length; i++) {
            box += '<div class="single-add box-style">\n' +
                '                    <div class="row">\n' +
                '                        <div class="col-lg-2 left-col">\n' +
                '                            <img src="../assets/img/java-logo.jpg" alt="">\n' +
                '                        </div>\n' +
                '                        <div class="col-lg-10 right-col">\n' +
                '                            <div class="row">\n' +
                '                                <div class="col-lg-5">\n' +
                '                                    <h5>' + json.data[i].title + '</h5>\n' +
                '                                    <p><b>Employer: </b>' + json.data[i].company +
                '                                    <p><b>Localization: </b>' + json.data[i].address + '</p>\n' +
                '                                    <p><b>Salary: </b>' + json.data[i].salary + '</p>\n' +
                '                                </div>\n' +
                '                                <div class="col-lg-3 date-info">\n' +
                '                                    <p class="added">' + json.data[i].added_date + ' : ' + json.data[i].expiration_date + '</p>\n' +
                '                                    <a href="#">Java,</a>\n' +
                '                                    <a href="#">Spring,</a>\n' +
                '                                    <a href="#">Hibernate</a>\n' +
                '                                </div>\n' +
                '                               <div class="col-lg-4 weather-info">' +
                '                                   <div class="row">' +
                '                                       <div class="col-3">' +
                '                                           <p>Temp:</p>' +
                '                                           <p>Wind:</p>' +
                '                                           <p>Pressure:</p>' +
                '                                       </div>' +
                '                                       <div class="col-4">' +
                '                                           <p class="weather-value">11</p>' +
                '                                           <p class="weather-value">11km/h</p>' +
                '                                           <p class="weather-value">1012 hPa</p>' +
                '                                       </div>' +
                '                                       <div class="col-5">' +
                '                                           <img src="../assets/img/java-logo.jpg">' +
                '                                       </div>' +
                '                                    </div>' +
                '                                   </div>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="col-lg-12 description">\n' +
                '                            <p>' + json.data[i].description + '</p>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                </div>';
        }
        return box;
    }

    function getWeatherInfo() {
        console.log("TRTRT " + lat + " : " + long);
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + long + "&APPID=63c9c9c76d0dcc57f26cf102c2089f98",
            dataType: 'json',
            success: function (json) {

                console.log(json.main.temp);
            },
            complete: function () {
            },
            error: function () {
            }
        });
    }

});