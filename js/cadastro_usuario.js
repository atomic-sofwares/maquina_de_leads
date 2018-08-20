
$('body').on('submit','#formulario_cadastro', function (e) {
    e.preventDefault();

    $.post( "../sistema/funcoes/cadastro.php", $(this).serialize(),function( data ) {
        if (data == 0) {
            $('#informacao').html('<p style="color: red;"> E-mail já cadastrado </p>');
            $("#formulario_cadastro input").val("");
            $("#senha").val('');
        }
        else{
            $('#formulario_cadastro').remove();
            $('#sucesso').css('display','inline');
        }
    });
});
