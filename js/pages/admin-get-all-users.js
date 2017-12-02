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
            type: "GET",
            cash: false,
            url: "../public/api/user",
            dataType: 'json',
            success: function (json) {
                $('#all-users').append(createTableHead() + createTableRow(json))
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
