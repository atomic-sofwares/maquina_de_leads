<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 18/08/18
 * Time: 15:59
 */
require 'funcoes.php';

//este é o correto



if ($_POST["email"] == $_POST["confirma_email"] and $_POST["senha"] == $_POST["confirma_senha"]){

    $sql_usuario = func_buscar_email($_POST["email"]);

    if ($sql_usuario == 0) {
        func_inserir_usuario($_POST);
        echo '1';
    } else {
        echo '0';
    }
}
?>
