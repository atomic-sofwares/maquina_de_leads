$(document).ready(function () {
    //Iniciar inputs apagados
    $('.form_dados_pessoais').prop('disabled', true);
    $('.form_endereco').prop('disabled', true);

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
    $("#cep").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#estado").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

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


$('body').on('submit', '#formulario_dados_pessoais', function (e) {
    //impedi o submit automático
    e.preventDefault();

    //chamo pelo método post
    $.post("../sistema/funcoes/cadastro.php", $(this).serialize(), function (data) {
        if (data == 0) {
            alert('Erro ao registrar dados!')
        }
        else {
            alert('Dados registrados com sucesso!');
            location.reload();
        }
    });
});

$('body').on('submit', '#formulario_dados_pessoais_update', function (e) {
    //impedi o submit automático
    e.preventDefault();

    //chamo pelo método post
    $.post("../sistema/funcoes/cadastro.php", $(this).serialize(), function (data) {
        if (data == 0) {
            alert('Erro ao registrar dados!')
        }
        else {
            alert('Dados registrados com sucesso!');
            location.reload();
        }
    });
});

function alterna_edicao(acao) {
    if (acao == 'habilitar_pessoais') {
        $('.form_dados_pessoais').prop('disabled', false);
        $('#div_editar_dados_pessoais').css('display', 'none');
        $('#div_btns_cancelar_salvar_edicao_dados_pessoais').css('display', 'inline');
    } else if (acao == 'desabilitar_pessoais') {
        $('.form_dados_pessoais').prop('disabled', true);
        $('#div_editar_dados_pessoais').css('display', 'inline');
        $('#div_btns_cancelar_salvar_edicao_dados_pessoais').css('display', 'none');
    } else if (acao == 'habilitar_endereco') {
        $('.form_endereco').prop('disabled', false); //Habilita os inputs de endereço
        $('#div_btn_editar_endereco').css('display', 'none');
        $('#div_btns_cancelar_salvar_edicao_endereco').css('display', 'inline');

    } else if (acao == 'desabilitar_endereco') {
        $('.form_endereco').prop('disabled', true); //Desabilita os inputs de endereço
        $('#div_btn_editar_endereco').css('display', 'inline');
        $('#div_btns_cancelar_salvar_edicao_endereco').css('display', 'none');
    }
}


//Btn dados pessoais(#início)
$('#btn_editar_dados_pessoais').on('click', function () {

    alterna_edicao('habilitar_pessoais');

});

$("#btn_cancelar_edicao_dados_pessoais").on('click', function () {
    alterna_edicao('desabilitar_pessoais');
});


$('body').on('submit', '#formulario_dados_endereco', function (e) {
    //impedi o submit automático
    e.preventDefault();

    //chamo pelo método post
    $.post("../sistema/funcoes/cadastro.php", $(this).serialize(), function (data) {
        if (data == 0) {
            alert('Erro ao editar endereço!');
        }
        else {
            alert('Dados registrados com sucesso!');
            location.reload();
        }
    });
});

$("#btn_editar_endereco").on('click', function () {

    alterna_edicao('habilitar_endereco');

});

$("#btn_cancelar_edicao_endereco").on('click', function () {
    alterna_edicao('desabilitar_endereco');
});

