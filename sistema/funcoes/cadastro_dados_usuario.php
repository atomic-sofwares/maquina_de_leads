<?php
/**
 * Created by PhpStorm.
 * User: patrick
 * Date: 24/08/18
 * Time: 00:25
 */

require 'sessao.php';

require 'funcoes.php';

$id_usuario = $_SESSION['id_user_mql'];
$nome_tabela = 'TB_Dados_Pessoais';

$sql_usuario = func_buscar_id_usuario($id_usuario,$nome_tabela);
echo soNumero($_POST["cpf"]);
//if ($sql_usuario == 0) {
//    func_inserir_dados_pessoais($id_usuario, $_POST);
//
//} else {
//    echo '0';
//}

function converter_dados(){
    $dados_processados = [];


    return $dados_processados;
}

function soNumero($str) {
    return preg_replace("/[^0-9]/", "", $str);
}
?>