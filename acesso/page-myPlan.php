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
    <link rel="stylesheet" href="../css/page-myProfile.css">

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
                    <h1>Minha Página</h1>
                </div>
            </div>
        </div>
    </div>

    <!--Área das páginas (#início) -->
    <div class="login-form">
        <!-- formulario dados pessoais(#início) -->
        <form>
            <!-- Área (card)-- Dados pessoais(#início)-->
            <div class="card" id="card_dados_pessoais">
                <!-- card-body -- Dados pessoais(#início)-->
                <div class="card-body card-block">

                    <div class="container" id="dados_pessoais">

                        <div class="row">
                            <!-- Nome/número página -->
                            <div class="col-md-3">
                                <h3>Page 1</h3>
                            </div>

                            <!-- Visitas e link cópia -->
                            <div class="col-md-8">
                                <div class="row">
                                    <label>Nº visitas</label>
                                </div>
                                <div class="row">
                                    <button id="btn_cancelar_edicao_dados_pessoais" type="button"
                                            class="btn-outline-danger btns_edicao">
                                        Link cópia
                                        <i id="btn_cancelar_edicao_dados_pessoais"
                                           class="menu-icon fa fa-times"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- ícones -->
                            <div class="col-md-1">
                                <div class="row">
                                    <button id="btn_cancelar_edicao_dados_pessoais" type="button"
                                            class="btn-outline-danger btns_edicao">
                                        <i id="btn_cancelar_edicao_dados_pessoais"
                                           class="menu-icon fa fa-times"></i>
                                    </button>
                                </div>
                                <div class="row">
                                    <button id="btn_cancelar_edicao_dados_pessoais" type="button"
                                            class="btn-outline-danger btns_edicao">
                                        <i id="btn_cancelar_edicao_dados_pessoais"
                                           class="menu-icon fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
        </form><!-- formulario dados pessoais(#fim) -->

    </div><!-- card-body -- Dados pessoais(#fim)-->

</div><!-- Área (card) -- Dados pessoais (#fim)-->
    <!--Área das páginas (#fim) -->
</div>

<!-- Right Panel -->

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script src="../js/dashboard.js"></script>
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>
</html>