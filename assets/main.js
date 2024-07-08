$(document).ready(function() {


    window.submitInfo = function(action){
        
        let data = {
            action: action,
            id: $('#id').val(),
            nome: $('#nome').val(),
            email: $('#email').val(),
            telefone: $('#telefone').val()
        };
        $.ajax({
            type: "POST",
            url: "function.php",
            data: data,
            success: function (response) {
                alert(response)
                location.reload()
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