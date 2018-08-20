<?php
require 'conexao.php';


function func_inserir_usuario($dados)
{
    global $conn;

    $sql = "INSERT INTO quero_sucesso.TB_Usuario 
        (usuario, senha, email )
        VALUES ('" . $dados['email'] . "','" . $dados['senha'] . "','" . $dados['email'] . "')";


    $sql_executar = $conn->prepare($sql);
    $sql_executar->execute();
    return $sql_executar;
}

function func_editar_usuario($user)
{
    global $conn;

    $sql = "SELECT * FROM quero_sucesso.TB_Usuario where usuario LIKE '%" . $user . "%'";

    $sql_executar = $conn->prepare($sql);
    $sql_executar = $sql_executar->execute();
    return $sql_executar;
}

function func_buscar_usuarios()
{
    global $conn;

    $sql = "SELECT * FROM quero_sucesso.TB_Usuario";

    $sql_executar = $conn->prepare($sql);
    $sql_executar = $sql_executar->execute();
    return $sql_executar;
}

function func_buscar_email($email){
    global $conn;

    $sql = "SELECT * FROM quero_sucesso.TB_Usuario 
    WHERE email ='" . $email . "'";

    $sql_executar = $conn->prepare($sql);
    $sql_executar->execute();

    $email_existente = $sql_executar->rowCount();

   return $email_existente;
}

function func_buscar_usuario($email, $senha)
{
    global $conn;


    $sql = "SELECT * FROM quero_sucesso.TB_Usuario 
    WHERE email ='" . $email . "' AND senha='" . $senha . "'";
    
    $sql_executar = $conn->prepare($sql);
    $sql_executar->execute();

    return $sql_executar;
}