$(document).ready(function() {
    //Iniciar inputs apagados
    $('.form_dados_pessoais').prop('disabled', true);
    $('.form_endereco').prop('disabled', true);

    //Btn dados pessoais(#início)
    $('#btn_editar_dados_pessoais').click(function () {
        //Post the form data serialized for the proper formatting
        console.log("Editar dados pessoais");
        $('#div_editar_dados_pessoais').css('display','none');
        $('#div_btns_cancelar_salvar_edicao_dados_pessoais').css('display','inline');

        $('.form_dados_pessoais').prop('disabled', false); //Habilita os inputs de dados pessoais
    });

    $("#btn_cancelar_edicao_dados_pessoais").click(function () {
        $('.form_dados_pessoais').prop('disabled', true); //Desabilita os inputs de dados pessoais

        $('#div_editar_dados_pessoais').css('display','inline');
        $('#div_btns_cancelar_salvar_edicao_dados_pessoais').css('display','none');

    });

    $("#btn_salvar_edicao_dados_pessoais").click(function () {
        $('.form_dados_pessoais').prop('disabled', true); //Desabilita os inputs de dados pessoais

        $('#div_editar_dados_pessoais').css('display','inline');
        $('#div_btns_cancelar_salvar_edicao_dados_pessoais').css('display','none');

        $json_dados_pessoais = {
            nome: nome.value,
            sobrenome: sobrenome.value,
            cpf: cpf.value,
            data_nascimento: data_nascimento.value,
            rg: rg.value,
            telefone: telefone.value,
            sexo: sexo.value
        }

        $.post("../sistema/funcoes/cadastro_dados_usuario.php", $json_dados_pessoais, function (resposta) {
            console.log(resposta)
        });

    });
    //Btn dados pessoais(#fim)


    //Botões endereço(#início)
    $("#btn_editar_endereco").click(function () {
        //Post the form data serialized for the proper formatting
        console.log("Editar endereço");
        $('#div_btn_editar_endereco').css('display','none');
        $('#div_btns_cancelar_salvar_edicao_endereco').css('display','inline');

        $('.form_endereco').prop('disabled', false); //Habilita os inputs de endereço
    });

    $("#btn_cancelar_edicao_endereco").click(function () {
        $('.form_endereco').prop('disabled', true); //Desabilita os inputs de endereço

        $('#div_btn_editar_endereco').css('display','inline');
        $('#div_btns_cancelar_salvar_edicao_endereco').css('display','none');
    });

    $("#btn_salvar_edicao_endereco").click(function () {
        $('.form_endereco').prop('disabled', true); //Desabilita os inputs de endereço

        $('#div_btn_editar_endereco').css('display','inline');
        $('#div_btns_cancelar_salvar_edicao_endereco').css('display','none');



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
