<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 18/08/18
 * Time: 15:59
 */
require 'funcoes.php';

//este é o correto


$acao = $_POST['acao'];

switch ($acao) {
    case 'dados_pessoais_update':
        func_inserir_dados_pessoais_update($_POST);
        echo '1';
        break;

    case 'dados_pessoais':
        func_inserir_dados_pessoais($_POST);
        echo '1';
        break;
    case 'novo_usuario':
        if ($_POST["email"] == $_POST["confirma_email"] and $_POST["senha"] == $_POST["confirma_senha"]) {

            $sql_usuario = func_buscar_email($_POST["email"]);

            if ($sql_usuario == 0) {
                func_inserir_usuario($_POST);
                echo '1';
            } else {
                echo '0';
            }
        }

        break;

    case 'dados_endereco':
        func_inserir_dados_endereco($_POST);
        echo'1';
        break;
}


?>
