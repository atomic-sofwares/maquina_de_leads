$('body').on('submit','#formulario_cadastro_dados', function (e) {
    e.preventDefault();

    $.post( "../sistema/funcoes/cadastro_dados_usuario.php", $(this).serialize(),function( data ) {
        if (data == 0) {
            $('#informacao').html('<p style="color: red;"> E-mail já cadastradoS </p>');
            $("#formulario_cadastro input").val("");
            $("#senha").val('');
        }
        else{
            $('#dados_pessoais').remove();
            $('#endereco').css('display','inline');
        }
    });
});
