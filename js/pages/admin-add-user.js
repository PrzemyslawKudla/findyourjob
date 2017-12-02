'use strict';

jQuery(function ($) {

    var btn = $('#add-user-button');
    var login, password, name, surName, email, rights;

    btn.on('click', function () {
        rights = $('select option:selected').val();
        login = $('#add-login').val();
        password = $('#add-password').val();
        name = $('#add-name').val();
        surName = $('#add-surname').val();
        email = $('#add-email').val();
        addUser(login, password, name, surName, email, rights);
    });


    function addUser(login, password, name, surname, email, rights) {
        $.ajax({
            type: "POST",
            cash: false,
            data: {
                'login': login,
                'password': password,
                'name': name,
                'surname': surname,
                'email': email,
                'rights': rights,
                'status': 1
            },
            url: "../public/api/user",
            dataType: 'json',
            success: function (json) {
                console.log(json);
            },
            complete: function () {
            },
            error: function () {
            }
        });
    }

});