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
                    zoom: 12,
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

    getAdd();

    function getAdd() {
        $.ajax({
            type: "GET",
            cash: false,
            url: "../public/api/advertisement/1",
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
                '                                <div class="col-lg-9">\n' +
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
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="col-lg-12 description">\n' +
                '                            <p>'+ json.data[i].description +'</p>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                </div>';
        }
        return box;
    }

});