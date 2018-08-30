<?php
require '../sistema/funcoes/sessao.php';
require '../sistema/funcoes/funcoes.php';

$sql_dados_pessoais = func_buscar_dados_pessoais($_SESSION['id_user_mql']);
$dados_pessoais = $sql_dados_pessoais->fetchAll(PDO::FETCH_ASSOC)[0];
$total_dados_pessoais = $sql_dados_pessoais->rowCount();

$sql_dados_endereco = func_buscar_dados_endereco($_SESSION['id_user_mql']);
$dados_endereco = $sql_dados_endereco->fetchAll(PDO::FETCH_ASSOC)[0];
$total_dados_endereco = $sql_dados_endereco->rowCount();

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
        <form id="<?= $total_dados_pessoais>0 ? 'formulario_dados_pessoais_update':'formulario_dados_pessoais'  ?>">
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

                            <button id="btn_salvar_edicao_dados_pessoais" type="submit" class="btn-outline-success btns_edicao" style="margin-right: 4%;">
                                <i id="btn_salvar_edicao_dados_pessoais"
                                   class="menu-icon fa fa-check-square-o"></i>
                                Salvar
                            </button>

                        </div>

                    </div>
                </div>

                <!-- card-body -- Dados pessoais(#início)-->
                <div class="card-body card-block">

                    <div class="container" id="dados_pessoais">

                        <input type="hidden" value="<?= $total_dados_pessoais>0 ? 'dados_pessoais_update':'dados_pessoais'  ?>" name="acao">
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
                                <input type="date" class="form-control form_dados_pessoais" id="data_nascimento" value="<?= $dados_pessoais['data_nascimento'] ?>"
                                       name="nascimento" required>
                            </div>

                            <div class="form-group col-md-4 col-sm-4 col-lg-4" id="div_sexo">
                                <label>Sexo</label>
                                <select class="form-control form_dados_pessoais" id="sexo" name="sexo" required>
                                    <option value="<?= $dados_pessoais['sexo'] == 'Masculino' ? 'Masculino':'Feminino'?>"> <?= $dados_pessoais['sexo'] == 'Masculino' ? 'Masculino':'Feminino' ?></option>
                                    <option value=""></option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <label>Telefone</label>
                                <input type="tel" class="form-control form_dados_pessoais" id="telefone" value="<?= $dados_pessoais['telefone'] ?>"
                                       name="telefone" required>
                                <small class="form-text text-muted">Inserir apenas números</small>
                            </div>

                        </div>

                        <!--CPF e RG-->
                        <div class="form-group row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label>RG</label>
                                <input type="text" class="form-control form_dados_pessoais" id="rg" value="<?= $dados_pessoais['rg'] ?>"
                                       name="rg" required>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label>CPF</label>
                                <input type="text" class="form-control form_dados_pessoais" id="cpf" value="<?= $dados_pessoais['cpf'] ?>"
                                       name="cpf" required>
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
    <form id="<?= $total_dados_endereco>0 ? 'formulario_dados_endereco_update':'formulario_dados_endereco'  ?>">
<!--        <input type="hidden" value="dados_endereco" name="acao">-->
<!--        <input type="hidden" value="--><?//= $_SESSION['id_user_mql'] ?><!--" name="id_usuario">-->

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

                    <button id="btn_salvar_edicao_endereco" type="submit" class="btn-outline-success btns_edicao" style="margin-right: 4%;">
                        <i id="btn_salvar_edicao_endereco"
                           class="menu-icon fa fa-check-square-o"></i>
                        Salvar
                    </button>
<!--                    <input id="btn_salvar_edicao_endereco" type="submit" class="btn-outline-success btns_edicao" value="Salvar"-->
<!--                            -->
<!--                    <i id="btn_cancelar_edicao_endereco" class="menu-icon fa fa-times"></i>-->

                </div>
            </div>
        </div>

        <!-- card-body -- Endereço(#início)-->
        <div class="card-body card-block">

            <div class="container" id="dados_endereco">
                <input type="hidden" value="<?= $total_dados_endereco>0 ? 'dados_endereco_update':'dados_endereco'  ?>" name="acao">
                <input type="hidden" value="<?= $_SESSION['id_user_mql'] ?>" name="id_usuario">

                <!--CEP-->
                <div class="form-group row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label>CEP</label>
                        <input type="tel" class="form-control form_endereco" id="cep" value="<?= $dados_endereco['cep'] ?>"
                               name="cep" required>
                    </div>

                    <div hidden class="form-group col-md-4 col-sm-4 col-lg-4">
                        <label>País</label>
                        <select  class="form-control" id="pais"  name="pais" required>
                            <option value="Brasil" selected>Brasil</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-lg-4">
                        <label>Estado</label>
                        <select class="form-control form_endereco" id="estado" name="estado" required>
                            <option value="<?= $dados_endereco['estado'] ?>"><?= $dados_endereco['estado'] ?></option>
                            <option value="Acre">Acre</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Espirito Santo">Espirito Santo</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Pernambuco">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="io de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Sergipe">Sergipe</option>
                            <option value="Tocantins">Tocantins</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4 col-sm-4 col-lg-4">
                        <label>Cidade</label>
                        <input type="text" class="form-control form_endereco" id="cidade" value="<?= $dados_endereco['cidade'] ?>"
                               name="cidade" required>
                    </div>

                </div>

                <!--Rua, bairro, número-->
                <div class="form-group row">
                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <label>Bairro</label>
                        <input type="text" class="form-control form_endereco" id="bairro" value="<?= $dados_endereco['bairro'] ?>"
                               name="bairro" required>
                    </div>

                    <div class="form-group col-md-6 col-sm-4 col-lg-6">
                        <label>Rua</label>
                        <input type="text" class="form-control form_endereco" id="rua" value="<?= $dados_endereco['rua'] ?>"
                               name="rua" required>
                    </div>

                    <div class="form-group col-md-2 col-sm-4 col-lg-2">
                        <label>Número</label>
                        <input type="text" class="form-control form_endereco" id="numero" value="<?= $dados_endereco['numero'] ?>"
                               name="numero">
                    </div>
                </div>

                <!--Complemento-->
                <div class="form-group row">
                    <div class="form-group col-md12 col-sm-12 col-lg-12">
                        <label>Complemento</label>
                        <input type="text" class="form-control form_endereco" id="complemento" value="<?= $dados_endereco['complemento'] ?>"
                               name="complemento" required>
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