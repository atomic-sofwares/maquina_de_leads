<?php
require 'conexao.php';


function func_inserir_usuario($dados)
{
    global $conn;

    $sql = "INSERT INTO quero_sucesso.TB_Usuario 
        (usuario, senha, email, link_imagem )
        VALUES ('" . $dados['user'] . "','" . $dados['senha'] . "','" . $dados['email'] . "','" . $dados['link_imagem'] . "')";


    $sql_executar = $conn->prepare($sql);
    $sql_executar = $sql_executar->execute();
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

function func_buscar_usuario($email, $senha)
{
    global $conn;

    $sql = "SELECT * FROM quero_sucesso.TB_Usuario 
    WHERE email ='" . $email . "' AND senha='" . $senha . "'";
    
    $sql_executar = $conn->prepare($sql);
    $sql_executar = $sql_executar->execute();

    return $sql_executar;
}