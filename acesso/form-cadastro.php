<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Máquina de Leads</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">

<!--    <link rel="stylesheet" href="assets/css/bootstrap-select.less">-->

    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
</head>
<body class="bg-dark" >

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo" style="margin-top: -22%; margin-bottom: -12%">
                    <img src="../images/logo.png" alt="Logo" style="position: relative; width: 50%;">
                </div>
                <div class="login-form">
                    <form id="formulario_cadastro_dados">
                        <div class="container" id="dados_pessoais">
                            <div class="form-group row">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="form-group row">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenome">
                            </div>

                            <div class="form-group row">
                                <div class="col" style="padding: 0;">
                                    <label>Data de Nascimento</label>
                                    <input type="date" class="form-control" id="data_nascimento" style="margim:0px; max-width: 95%; mim-width:90%">
                                </div>

                                <div class="col" style="padding: 0;">
                                    <label>Sexo</label>
                                    <select name="sexo" id="sexo" class="form-control" >
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col" style="padding: 0;">
                                    <label>Telefone</label>
                                    <input type="tel" class="form-control" required name="telefone" placeholder="(27) 9 99999-9999" style="margim:0px; min-width: 90%; max-width: 98%;">
                                    <small class="form-text text-muted">Inserir apenas números</small>
                                </div>

                                <div class="col" style="padding-right: 0;">
                                    <label>Confirme o telefone</label>
                                    <input type="tel" class="form-control" required name="confirma_telefone" placeholder="(27) 9 99999-9999">

                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Próxima página</button>
                        </div>

                        <div style="display: none;"  class="container" id="endereco">
                            <div class="form-group row">
                                <label style="font-max-size: 20px; font-mim-size: 14px;"><b>Endereço</b></label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES" selected>ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>

                            <input type="button" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Página Anterior" onclick="">
                        </div>

                            <div class="text-center" id="informacao">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="../js/cadastro_dados_usuario.js"></script>


</body>
</html>
