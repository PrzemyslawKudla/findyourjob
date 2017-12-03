jQuery(function ($) {
    var isEmpty = true;
    $('#delete-user').on('click', function () {
        checkAndClearTable();
    });

    function getAllUsers() {
        $.ajax({
            type: "GET",
            cash: false,
            url: "../public/api/user",
            dataType: 'json',
            success: function (json) {
                console.log(json);
                $('#delete-users-table').append(createTableHead() + createTableRow(json));
                addActionToDelete();
            },
            complete: function () {
            },
            error: function () {
                console.log('error');
            }
        });
    }


    function createTableHead() {
        return '<thead>\n' +
            '    <tr>\n' +
            '      <th>ID</th>\n' +
            '      <th>Name</th>\n' +
            '      <th>Surname</th>\n' +
            '      <th>Login</th>\n' +
            '      <th>E-mail</th>\n' +
            '    </tr>\n' +
            '  </thead>';
    }

    function createTableRow(json) {
        var row = '';
        for (i = 0; i < json.data.length; i++) {
            row += '<tr><th>' + (i + 1) + '</th>' +
                '<td>' + json.data[i].name + '</td>' +
                '<td>' + json.data[i].surname + '</td>' +
                '<td>' + json.data[i].login + '</td>' +
                '<td>' + json.data[i].email + '</td>' +
                '<td><button class="button-global btn btn-delete-user" data-user-id="' + json.data[i].id_user + '">Delete</button>' +
                '</tr>';
        }

        return row;

    }

    function addActionToDelete() {
        $('.btn-delete-user').on('click', function () {
           var id = $(this).attr('data-user-id');
            $('.loader-container').show();

            $.ajax({
                type: "DELETE",
                cash: false,
                url: '../public/api/user/' + id,
                dataType: 'text',
                success: function (json) {
                    console.log(json);
                        $('#delete-users-table').empty();
                        getAllUsers();
                        setTimeout(function () {
                            $('.loader-container').hide();
                        },1000);

                },
                complete: function () {
                    console.log('completed');
                },
                error: function () {
                }
            });
        })
    }

    function checkAndClearTable() {
        if (!isEmpty) {
            setTimeout(function () {
                $('#delete-users-table').empty();
            }, 500);
        }
        if ($('#delete-users-table tbody tr').length === 0) {
            getAllUsers();

            isEmpty = false;
        }
        else {
            isEmpty = true;
        }
    }
});
