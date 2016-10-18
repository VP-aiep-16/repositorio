$(document).ready(function() {
    /*$.ajax({
        url: 'phps/users.php',
        type: 'GET',
        dataType: 'json'
    })
    .done(function(data) {
        console.log(data);
        var $select = $('#users');
        $select.empty();
        $select.append($("<option></option>")
            .attr("value", 0)
            .text('- Seleccione -'));
        $.each(data, function(index, item) {
             $select.append($('<option></option>')
                .attr('value', item.pk)
                .text(item.name))
        });
    });*/
    $('#logear').click(function(event) {
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
            url: 'phps/login.php',
            type: 'POST',
            data: {'username': username, 'password': password}
        })
        .done(function(data) {
            console.log(data);
            if (data == 'ok') {
                
            }
        }); 
    });
});