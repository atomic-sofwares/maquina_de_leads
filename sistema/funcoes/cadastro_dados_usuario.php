<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 24/08/18
 * Time: 00:25
 */


//require 'funcoes.php';


if ($_POST["telefone"] == $_POST["confirma_telefone"]){
    echo '1';
} else {
    echo '0';
}
?>