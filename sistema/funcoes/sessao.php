<?php
session_start();

$hostname = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['user_mql']) && $_SESSION['user_mql'] != "") {
    //your contenct here
    if ($hostname != '/acesso/index.php') {

        header("Location: /acesso/index.php");
    }

} else {
    if ($hostname != '/acesso/page-login.php') {

        header('Location: /acesso/page-login.php');
    }
    //go back if username is not set

}
if ($_POST['acao'] == 'sair') {

    if (isset($_SESSION["user_mql"]) == true || $_SESSION["user_mql_logado"] == true) {
        //Do nothing. User has logged on.
        session_destroy();
        header('Location: /acesso/page-login.php');
    } else {

        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 42000, '/');
        }

    }
}

?>