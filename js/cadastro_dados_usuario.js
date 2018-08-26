$(document).ready(function() {
    //Iniciar inputs apagados
    $('.form_dados_pessoais').prop('disabled', true);
    $('.form_endereco').prop('disabled', true);
    //$('#div_imagem').css('display','none');

    //Btn dados pessoais(#início)
    $("#editar_dados_pessoais").on("click", function () {
        //Post the form data serialized for the proper formatting
        console.log("Editar dados pessoais");
        $('#editar_dados_pessoais').css('display','none');
        $('#cancelar_edicao_dados_pessoais').css('display','inline');
        $('#salvar_edicao_dados_pessoais').css('display','inline');

        $('#card_endereco').css('display','none');
        $('.form_dados_pessoais').prop('disabled', false); //Habilita os inputs de dados pessoais
    });

    $("#cancelar_edicao_dados_pessoais").on("click", function () {
        $('#editar_dados_pessoais').css('display','inline');
        $('#cancelar_edicao_dados_pessoais').css('display','none');
        $('#salvar_edicao_dados_pessoais').css('display','none');

    });

    $("#salvar_edicao_dados_pessoais").on("click", function () {
        $('#editar_dados_pessoais').css('display','inline');
        $('#cancelar_edicao_dados_pessoais').css('display','none');
        $('#salvar_edicao_dados_pessoais').css('display','none');

        $.post("../sistema/funcoes/cadastro_dados_usuario.php", {nome: #nome.val()}, function () {
            console.log(#nome.val())
        });
    });
    //Btn dados pessoais(#fim)


    //Botões endereço(#início)
    $("#editar_endereco").on("click", function () {
        //Post the form data serialized for the proper formatting
        console.log("Editar endereço");
        $('#editar_endereco').css('display','none');
        $('#cancelar_edicao_endereco').css('display','inline');
        $('#salvar_edicao_endereco').css('display','inline');

        $('#card_dados_pessoais').css('display','none');
        $('.form_endereco').prop('disabled', false); //Habilita os inputs de endereço
    });

    $("#cancelar_edicao_endereco").on("click", function () {
        $('#editar_endereco').css('display','inline');
        $('#cancelar_edicao_endereco').css('display','none');
        $('#salvar_edicao_endereco').css('display','none');

    });

    $("#salvar_edicao_endereco").on("click", function () {
        $('#editar_endereco').css('display','inline');
        $('#cancelar_edicao_endereco').css('display','none');
        $('#salvar_edicao_endereco').css('display','none');

    });
    //Botões endereço(#fim)



    //Preenchimento CEP
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
        $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#estado").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});
