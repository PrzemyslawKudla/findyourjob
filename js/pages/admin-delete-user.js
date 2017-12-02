jQuery(function ($) {
    var isEmpty = true;
    $('#see-all-users').on('click', function () {
        if(!isEmpty) {
            setTimeout(function () {
                $('#all-users').empty();
            },1000);

        }
        if($('#all-users tbody tr').length === 0) {
            getAllUsers();
            isEmpty = false;
        }
        else {
            isEmpty = true;
        }
    });

    function getAllUsers() {
        $.ajax({
            type: "DELETE",
            cash: false,
            url: "../public/api/user/2",
            dataType : 'text',
            success: function(json) {
                console.log(json);
            },
            complete: function() {
                console.log('completed');
            },
            error: function () {
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
            '      <th>Rights</th>\n' +
            '      <th>Status</th>\n' +
            '      <th>Date of register</th>\n' +
            '      <th>Last login</th>\n' +
            '    </tr>\n' +
            '  </thead>';
    }

    function createTableRow(json) {
        var row ='';
        for (i = 0; i < json.data.length; i++){
            row += '<tr><th>'+ (i + 1) + '</th>' +
                '<td>'+ json.data[i].name +'</td>' +
                '<td>'+ json.data[i].surname +'</td>' +
                '<td>'+ json.data[i].login +'</td>' +
                '<td>'+ json.data[i].email +'</td>' +
                '<td>'+ json.data[i].rights +'</td>' +
                '<td>'+ json.data[i].status +'</td>' +
                '<td>'+ json.data[i].date_of_register +'</td>' +
                '<td>'+ json.data[i].last_login +'</td>' +
                '</tr>';
        }
        return row;

    }

});
