<?php
/**
 * Created by PhpStorm.
 * User: marcos
 * Date: 18/08/18
 * Time: 12:40
 */

//require 'funcoes/funcoes.php';

echo 'no login.php';
exit();
$sql_usuario = func_buscar_usuario($_REQUEST['email'], $_REQUEST['senha']);

$total = $sql_usuario->rowCount();

if ($total){
    //usuário encontrado
    echo 'Usuário Logado!';

}else{
    //usuário não encontrado
    echo 'Usuário não encontrado!';
}

