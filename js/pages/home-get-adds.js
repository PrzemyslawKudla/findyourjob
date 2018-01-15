jQuery(function ($) {

    getAllAdds();

    function getAllAdds() {
        $.ajax({
            type: "GET",
            cash: false,
            url: "http://przem94.ayz.pl/findYourJob/public/api/advertisements",
            dataType: 'json',
            success: function (json) {
                console.log(json);
                $('.main-content').append(createSingleBox(json));
                $('.read-more').on('click', function () {
                    var id = $(this).attr("data-add-id");
                    var loc = $(this).attr("data-loc-id");
                    window.location.href = '/findYourJob/view/advertisement.php?id=' + id + '?loc=' + loc;
                });
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
                '                            <p>'+ createSubstring(json.data[i].description) +'</p>\n' +
                '                            <a href="#" data-loc-id="'+ json.data[i].localization_id +'" data-add-id="'+ json.data[i].id_advertisment +'" class="read-more">Read more</a>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                </div>';
        }
        return box;
    }

    function createSubstring(string) {
        return string.substring(0,400) + "..";
    }
});
