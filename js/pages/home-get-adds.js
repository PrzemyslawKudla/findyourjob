jQuery(function ($) {
        getAllAdds();
    function getAllAdds() {
        $.ajax({
            type: "GET",
            cash: false,
            url: "../public/api/advertisements",
            dataType : 'json',
            success: function(json) {
                console.log(json);
                $('.main-content').append(createSingleBox(json));
            },
            complete: function() {
                console.log('completed');
            },
            error: function () {
                console.log('Error');
            }

        });
    }


    function createSingleBox(json) {
        var box = '';
        for (i = 0; i < json.data.length; i++){
            box += '<div class="single-add box-style">\n' +
                '                    <div class="row">\n' +
                '                        <div class="col-lg-2 left-col">\n' +
                '                            <img src="../assets/img/java-logo.jpg" alt="">\n' +
                '                        </div>\n' +
                '                        <div class="col-lg-10 right-col">\n' +
                '                            <div class="row">\n' +
                '                                <div class="col-lg-9">\n' +
                '                                    <h5>Java junior developer</h5>\n' +
                '                                    <p><b>Employer: </b>Comarch S.A\n' +
                '                                    <p><b>Localization: </b>Generała Jarosława Dąbrowskiego 20, 35-036 Rzeszów</p>\n' +
                '                                    <p><b>Salary: </b>4000 - 7000PLN UoP</p>\n' +
                '                                </div>\n' +
                '                                <div class="col-lg-3 date-info">\n' +
                '                                    <p class="added">12.10.2017 - 20.10.2017</p>\n' +
                '                                    <a href="#">Java,</a>\n' +
                '                                    <a href="#">Spring,</a>\n' +
                '                                    <a href="#">Hibernate</a>\n' +
                '                                </div>\n' +
                '                            </div>\n' +
                '                        </div>\n' +
                '                        <div class="col-lg-12 description">\n' +
                '                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aspernatur atque dolorem\n' +
                '                                eligendi error et harum hic in iusto non, pariatur placeat possimus rerum sapiente\n' +
                '                                ullam. Asperiores modi mollitia porro! Autem dolorum molestias officia placeat quam sit\n' +
                '                                sunt tenetur vitae..</p>\n' +
                '                            <a href="#" class="read-more">Read more</a>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                </div>';
        }
      return box;
    }

});
