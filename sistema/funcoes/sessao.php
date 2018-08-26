<?php
session_start();

$hostname = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['user_mql']) && $_SESSION['user_mql'] != "") {
    //your contenct here
    //echo 'usuário já logado';

    if ($_POST['acao'] == 'sair') {
        session_destroy();
        header('Location: /acesso/page-login.php');
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 42000, '/');
        }


    }

    if ($hostname == '/' || $hostname == '/acesso/page-login.php' || $hostname == '/sistema/funcoes/login.php') {

        header("Location: /acesso/index.php");

    } else if ($hostname != '/acesso/index.php') {
        //echo $hostname;
        //header("Location: $hostname");
    }


    $img_perfil_mql = $_SESSION['img_perfil_mql'];


} else {
    if ($hostname != '/acesso/page-login.php') {

        header('Location: /acesso/page-login.php');
    }
    //go back if username is not set

}


?>