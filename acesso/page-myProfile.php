<?php
require '../sistema/funcoes/sessao.php';
require '../sistema/funcoes/funcoes.php';

$sql_dados_pessoais = func_buscar_dados_pessoais($_SESSION['id_user_mql']);
$dados_pessoais = $sql_dados_pessoais->fetchAll(PDO::FETCH_ASSOC)[0];

$total = $sql_dados_pessoais->rowCount();

?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Máquina de Leads</title>
    <meta name="description" content="Máquina de Leads">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="../css/page-myProfile.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<?php require_once 'menu_lateral.php' ?>


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <?php require_once 'header.php' ?>

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Perfil</h1>
                </div>

            </div>
        </div>
    </div>

    <!-- Área de cadastro (#início)-->
    <div class="login-form">
        <!-- formulario dados pessoais(#início) -->
        <form id="<?= $total>0 ? 'formulario_dados_pessoais_update':'formulario_dados_pessoais'  ?>">
            <!-- Área (card)-- Dados pessoais(#início)-->
            <div class="card" id="card_dados_pessoais">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <strong style="float: left;">Dados Pessoais</strong>
                        </div>

                        <div class="col div_btn_edicao" id="div_editar_dados_pessoais" style="float: right;">
                            <button id="btn_editar_dados_pessoais" type="button"
                                    class="btn-outline-secondary btns_edicao">
                                <i id="btn_editar_dados_pessoais"
                                   class="menu-icon fa fa-pencil"></i>
                                Editar
                            </button>
                        </div>

                        <div class="col" id="div_btns_cancelar_salvar_edicao_dados_pessoais"
                             style="float: right; display: none;">
                            <button id="btn_cancelar_edicao_dados_pessoais" type="button"
                                    class="btn-outline-danger btns_edicao">
                                <i id="btn_cancelar_edicao_dados_pessoais"
                                   class="menu-icon fa fa-times"></i>
                                Sair
                            </button>

                            <input id="btn_salvar_edicao_dados_pessoais" type="submit"
                                   class="btn-outline-success btns_edicao" style="margin-right: 5%;">

                        </div>

                    </div>
                </div>

                <!-- card-body -- Dados pessoais(#início)-->
                <div class="card-body card-block">

                    <div class="container" id="dados_pessoais">

                        <input type="hidden" value="<?= $total>0 ? 'dados_pessoais_update':'dados_pessoais'  ?>" name="acao">
                        <input type="hidden" value="<?= $_SESSION['id_user_mql'] ?>" name="id_usuario">

                        <!--Nome e sobrenome-->
                        <div class="form-group row">
                            <div class="form-group col-md-6 col-sm-12 ">
                                <label>Nome</label>
                                <input type="text" class="form-control form_dados_pessoais" id="nome" name="nome" value="<?= $dados_pessoais['nome'] ?>" required>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control form_dados_pessoais" id="sobrenome" value="<?= $dados_pessoais['sobrenome'] ?>"
                                       name="sobrenome" required>
                            </div>
                        </div>

                        <!--Data de nascimento, sexo e tel-->
                        <div class="form-group row">
                            <div class="form-group col-md-4 col-sm-4 col-lg-4">
                                <label>Nascimento</label>
                                <input type="date" class="form-control form_dados_pessoais" id="data_nascimento"
                                       name="nascimento" required>
                            </div>

                            <div class="form-group col-md-4 col-sm-4 col-lg-4">
                                <label>Sexo</label>
                                <select class="form-control form_dados_pessoais" id="sexo" name="sexo" required>
                                    <option value=""></option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <label>Telefone</label>
                                <input type="tel" class="form-control form_dados_pessoais" id="telefone"
                                       name="telefone" required>
                                <small class="form-text text-muted">Inserir apenas números</small>
                            </div>

                        </div>

                        <!--CPF e RG-->
                        <div class="form-group row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label>RG</label>
                                <input type="text" class="form-control form_dados_pessoais" id="rg" name="rg" required>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label>CPF</label>
                                <input type="text" class="form-control form_dados_pessoais" id="cpf" name="cpf" required>
                            </div>
                        </div>
                        <div class="form-group row" id="div_imagem">
                            <div class="col">
                                <label for='imagem'>Imagem de perfil</label>
                                <input type="file" class="form-control-file form_dados_pessoais" id="imagem"
                                       accept="image/*">
                            </div>
                        </div>

                    </div>
        </form><!-- formulario dados pessoais(#fim) -->

    </div><!-- card-body -- Dados pessoais(#fim)-->

</div><!-- Área (card) -- Dados pessoais (#fim)-->


<!-- Área (card) --Endereço(#início)-->
<div class="card" id="card_endereco">


    <!-- formulario endereço(#início) -->
    <form id="formulario_dados_endereco">
        <input type="hidden" value="dados_endereco" name="acao">
        <input type="hidden" value="<?= $_SESSION['id_user_mql'] ?>" name="id_usuario">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <strong style="float: left;">Endereco</strong>
                </div>

                <div class="col div_btn_edicao" id="div_btn_editar_endereco" style="float: right;">
                    <button id="btn_editar_endereco" type="button" class="btn-outline-secondary btns_edicao">
                        <i id="btn_editar_endereco"
                           class="menu-icon fa fa-pencil"></i>
                        Editar
                    </button>
                </div>

                <div class="col" id="div_btns_cancelar_salvar_edicao_endereco" style="float: right; display: none;">
                    <button id="btn_cancelar_edicao_endereco" type="button" class="btn-outline-danger btns_edicao">
                        <i id="btn_cancelar_edicao_endereco"
                           class="menu-icon fa fa-times"></i>
                        Sair
                    </button>
                    <input id="btn_salvar_edicao_endereco" type="submit" class="btn-outline-success btns_edicao"
                            style="margin-right: 5%;">

                </div>
            </div>
        </div>

        <!-- card-body -- Endereço(#início)-->
        <div class="card-body card-block">

            <div class="container">
                <!--CEP-->
                <div class="form-group row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label>CEP</label>
                        <input type="tel" class="form-control form_endereco" id="cep" name="cep" required>
                    </div>

                    <div hidden class="form-group col-md-4 col-sm-4 col-lg-4">
                        <label>País</label>
                        <select  class="form-control" id="pais"  name="pais" required>
                            <option value="Brasil" selected>Brasil</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-lg-4">
                        <label>Estado</label>
                        <select class="form-control form_endereco   " id="estado" name="estado" required>
                            <option value="">Selecione</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espirito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-lg-4">
                        <label>Cidade</label>
                        <input type="text" class="form-control form_endereco" id="cidade" name="cidade" required>
                    </div>

                </div>

                <!--Rua, bairro, número-->
                <div class="form-group row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label>Bairro</label>
                        <input type="tel" class="form-control form_endereco" id="bairro" name="bairro" required>
                    </div>

                    <div class="form-group col-md-6 col-sm-4 col-lg-6">
                        <label>Rua</label>
                        <input type="text" class="form-control form_endereco" id="rua" name="rua" required>
                    </div>

                    <div class="form-group col-md-2 col-sm-4 col-lg-2">
                        <label>Número</label>
                        <input type="number" class="form-control form_endereco" id="numero" name="numero" required>
                    </div>
                </div>

                <!--Complemento-->
                <div class="form-group row">
                    <div class="form-group col-md12 col-sm-12 col-lg-12">
                        <label>Complemento</label>
                        <input type="text" class="form-control form_endereco" id="complemento" name="complemento" required>
                    </div>
                </div>

            </div>
    </form><!-- formulario endereço(#fim) -->

</div> <!-- card-body -- Endereço(#fim)-->

</div> <!-- Área (card) --Endereço(#fim)-->

</div><!-- Área de cadastro (#fim)-->


</body>

<!-- Right Panel -->

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="../js/cadastro_dados_usuario.js"></script>


<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/dashboard.js"></script>

</html>