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
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <span>Máquina de Leads</span>
                </div>
                <div class="login-form">
                    <form id="formulario_cadastro">

                        <div class="form-group row">
                            <label>E-mail</label>
                            <input type="email" class="form-control" required name="email" style="border-color: #dc3545;">
                        </div>
                        <div class="form-group row">
                            <label>Confirme o e-mail</label>
                            <input type="email" class="form-control" required name="confirma_email">
                        </div>


                        <div class="form-group row">
                            <label>Senha</label>
                            <input type="password" class="form-control" required name="senha">
                        </div>
                        <div class="form-group row">
                            <label>Confirme a senha</label>
                            <input type="password" class="form-control" required name="confirma_senha">
                        </div>

<!--                        <div class="checkbox">-->
<!--                            <label>-->
<!--                                <input type="checkbox"> Aceito os Termos e politicas-->
<!--                            </label>-->
<!--                        </div>-->
                        <div class="text-center" id="informacao">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar</button>
                        <!--<div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Register with facebook</button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Register with twitter</button>
                            </div>
                        </div>!-->
                        <div class="register-link m-t-15 text-center" style="margin-top:10px;">
                            <p>Já possui uma conta? <a href="page-login.php"> Entrar</a></p>
                        </div>
                    </form>
                    <div style="display: none;" id="sucesso">
                        <img src="../images/sucesso.png" style="width: 30%;left: 35%; position: relative">
                        <div class="row" style="height: 60%; margin-top: 20px; text-align: center;">
                            <h3 style="width: 100%">Usuário cadastrado com sucesso!</h3>
                            <p>Acesse o link de confirmação enviado para seu e-mail, caso não encontre verifique também na caixa de SPAM.</p>
                            <button type="button" class="btn btn-success" onclick="window.open('page-login.php','_self')">Ir para o login</button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="../js/cadastro_usuario.js"></script>


</body>
</html>
