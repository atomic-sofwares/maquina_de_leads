<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 18/08/18
 * Time: 15:59
 */
require 'funcoes.php';
session_start();

//alterados


$user = strip_tags($_POST["email"]);
$password = strip_tags($_POST["senha"]);
$sql_usuario = func_buscar_usuario($user, $password);
//echo 'chegamos aqui';
$total = $sql_usuario->rowCount();
echo $total;
if ($total == 1) {
    $_SESSION["username"] = $user;
    $_SESSION["userloggedon"] = true;

} else {
    echo "Password is not correct!";
}
?>
