<?php
session_start();

$hostname = $_SERVER['REQUEST_URI'];

if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
    //your contenct here
    if($hostname != '/acesso/index.php'){

        header("Location: /acesso/index.php");
    }

} else {
    //go back if username is not set
    header('Location: /acesso/page-login.php');
}
if ($_POST['acao'] == 'sair') {

    if (isset($_SESSION["username"]) == true || $_SESSION["userloggedon"] == true) {
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