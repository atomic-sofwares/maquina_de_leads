<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 19/08/18
 * Time: 15:45
 */


session_start();

if (isset($_SESSION["username"])==true || $_SESSION["userloggedon"]==true)
{
    //Do nothing. User has logged on.
}else{

    if (isset($_COOKIE[session_name()]))
    {
        setcookie(session_name(), '', time()-42000, '/');
    }
    session_destroy();
    header('Location: /acesso/page-login.php');
}
?>