<?php
session_start();
if(isset($_SESSION['username']) && $_SESSION['username']!=""){
    //your contenct here
}else{
    //go back if username is not set
    header("Location: /acesso/page-login.html");
}
?>