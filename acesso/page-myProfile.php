<?php
require '../sistema/funcoes/sessao.php'
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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->


<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"> <img src="../images/logo.png" alt="Logo" style="position: relative; width: 200px; height: 150px; margin-top: -10%; margin-bottom: -10%"></a>
            <a class="navbar-brand hidden" href="./"><img src="../images/logo.png" alt="Logo"></a>
        </div>

        <?php require_once 'menu_lateral.php'?>


    </nav>
</aside><!-- /#left-panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <?php require_once 'header.php'?>

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>

            </div>
        </div>
    </div>

    <!-- Área de cadastro (#início)-->
    <div class="login-form">

        <!-- Área (card)-- Dados pessoais(#início)-->
        <div class="card" id="card_dados_pessoais">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <strong style="float: left;">Dados Pessoais</strong>
                        <a href="#"  id="editar_dados_pessoais" style="float: right;"><i id="editar_dados_pessoais" class="menu-icon fa fa-pencil">&nbsp;Editar</i></a>
                        <a href="" id="cancelar_edicao_dados_pessoais" style="float: right; display: none;"><i class="menu-icon fa fa-times">&nbsp;Cancelar</i></a>
                        <a href="" id="salvar_edicao_dados_pessoais" style="float: right; margin-right: 15px; display: none;"><i class="menu-icon fa fa-check-square-o">&nbsp;Salvar</i></a>
                    </div>
                </div>
            </div>

            <!-- card-body -- Dados pessoais(#início)-->
            <div class="card-body card-block">

                <!-- formulario dados pessoais(#início) -->
                <form id="formulario_cadastro_dados_pessoais" >
                    <div class="container" id="dados_pessoais">

                        <!--Nome e sobrenome-->
                        <div class="form-group row">
                            <div class="form-group col-md-6 col-sm-12 ">
                                <label>Nome</label>
                                <input type="text" class="form-control form_dados_pessoais" id="nome">
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control form_dados_pessoais" id="sobrenome">
                            </div>
                        </div>

                        <!--Data de nascimento, sexo e tel-->
                        <div class="form-group row">
                            <div class="form-group col-md-4 col-sm-4 col-lg-4">
                                <label>Nascimento</label>
                                <input type="date" class="form-control form_dados_pessoais" id="data_nascimento">
                            </div>

                            <div class="form-group col-md-4 col-sm-4 col-lg-4">
                                <label>Sexo</label>
                                <select class="form-control form_dados_pessoais" id="sexo">
                                    <option value=""></option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>

                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <label>Telefone</label>
                                <input type="tel" class="form-control form_dados_pessoais" id="telefone" placeholder="(27) 9 99999-9999">
                                <small class="form-text text-muted">Inserir apenas números</small>
                            </div>

                        </div>

                        <!--CPF e RG-->
                        <div class="form-group row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label>RG</label>
                                <input type="text" class="form-control form_dados_pessoais" id="rg">
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label>CPF</label>
                                <input type="text" class="form-control form_dados_pessoais" id="cpf">
                            </div>
                        </div>

                    </div>
                </form><!-- formulario dados pessoais(#fim) -->

            </div><!-- card-body -- Dados pessoais(#fim)-->

        </div><!-- Área (card) -- Dados pessoais (#fim)-->



        <!-- Área (card) --Endereço(#início)-->
        <div class="card" id="card_endereco">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <strong style="float: left;">Endereço</strong>
                        <a href="#" id="editar_endereco" style="float: right; "><i class="menu-icon fa fa-pencil">&nbsp;Editar</i></a>
                        <a href="" id="cancelar_edicao_endereco" style="float: right; display: none;"><i class="menu-icon fa fa-times">&nbsp;Cancelar</i></a>
                        <a href="" id="salvar_edicao_endereco" style="float: right; margin-right: 15px; display: none;"><i class="menu-icon fa fa-check-square-o">&nbsp;Salvar</i></a>
                    </div>
                </div>
            </div>

            <!-- card-body -- Endereço(#início)-->
            <div class="card-body card-block">

                <!-- formulario endereço(#início) -->
                <form id="formulario_cadastro_endereco">
                    <div class="container">
                        <!--CEP-->
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <label>CEP</label>
                                <input type="tel" class="form-control form_endereco" id="cep">
                            </div>
                        </div>

                        <!--Cidade, estado e país-->
                        <div class="form-group row">
                            <div class="form-group col-md-4 col-sm-4 col-lg-4">
                                <label>País</label>
                                <select class="form-control"  id="pais" disabled="">
                                    <option value="Brasil">Brasil</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 col-sm-4 col-lg-4">
                                <label>Estado</label>
                                <select class="form-control form_endereco   " id="estado">
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
                                <input type="text" class="form-control form_endereco" id="cidade">
                            </div>

                        </div>

                        <!--Rua, bairro, número-->
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4 col-lg-4">
                                <label>Bairro</label>
                                <input type="tel" class="form-control form_endereco" id="bairro">
                            </div>

                            <div class="form-group col-md-6 col-sm-4 col-lg-6">
                                <label>Rua</label>
                                <input type="text" class="form-control form_endereco" id="rua">
                            </div>

                            <div class="form-group col-md-2 col-sm-4 col-lg-2">
                                <label>Número</label>
                                <input type="number" class="form-control form_endereco" id="numero">
                            </div>
                        </div>

                        <!--Complemento-->
                        <div class="form-group row">
                            <div class="form-group col-md12 col-sm-12 col-lg-12">
                                <label>Complemento</label>
                                <input type="text" class="form-control form_endereco" id="complemento">
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/dashboard.js"></script>

</html>