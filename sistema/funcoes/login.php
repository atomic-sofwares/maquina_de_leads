<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 18/08/18
 * Time: 15:59
 */
require 'sessao.php';
require 'funcoes.php';
session_start();

//este é o correto


$user = strip_tags($_POST["email"]);
$password = strip_tags($_POST["senha"]);
$sql_usuario = func_buscar_usuario($user, $password);
//echo 'chegamos aqui';
$total = $sql_usuario->rowCount();
$dados = $sql_usuario->fetch();

if ($total == 1) {
    $_SESSION["user_mql"] = $user;
    $_SESSION["user_mql_logado"] = true;
    header("Refresh:0");

} else {
    echo "Senha ou usuário incorreto!";
}
?>
