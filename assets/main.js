$(document).ready(function() {


    window.submitInfo = function (action) {

        let data = {
            action: action,
            id: $('#id').val(),
            nome: $('#nome').val(),
            email: $('#email').val(),
            telefone: $('#telefone').val()
        };
        $.ajax({
            type: 'POST',
            url: 'script.php',
            data: data,
            success: function (response){          
                alert(response);
                if(action == 'insert'){
                    $('#nome, #email, #telefone').val('');
                }else if(action == 'update'){
                    window.location.href = 'read-user.php';
                }else {
                    $('.list-group #'+action).remove();
                    var rowCount = $('.list-group .list-group-item').length;
                    if(rowCount == '0'){
                        location.reload();
                    }
                }
            }
        });

    };


    // máscara para telefones
    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
    onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.telefone').mask(SPMaskBehavior, spOptions);


})
