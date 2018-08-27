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

function func_inserir_dados_pessoais($dados)
{
    global $conn;


    $sql = "INSERT INTO quero_sucesso.TB_Dados_Pessoais
        (nome, sobrenome, data_nascimento, cpf, rg, telefone, sexo, id_usuario)
        VALUES ('" . $dados['nome'] . "','" . $dados['sobrenome'] . "','" . $dados['nascimento'] . "','" . $dados['cpf'] . "','" . $dados['rg'] . "','" . $dados['telefone'] . "','" . $dados['sexo'] . "','" . $dados['id_usuario'] . "')";

    $sql_executar = $conn->prepare($sql);
    $sql_executar->execute();

    return $sql_executar;
}

function func_inserir_dados_endereco($dados)
{
    global $conn;


    $sql = "INSERT INTO quero_sucesso.TB_Endereco
        (cidade, estado, pais, rua , complemento, cep, numero, bairro, id_usuario)
        VALUES ('" . $dados['cidade'] . "','" . $dados['estado'] . "','" . $dados['pais'] . "','" . $dados['rua'] . "','" . $dados['complemento'] . "','" . $dados['cep'] . "','" . $dados['numero'] . "','" . $dados['bairro'] . "','" . $dados['id_usuario'] . "')";

    $sql_executar = $conn->prepare($sql);
    $sql_executar->execute();

    var_dump($sql_executar);

    return $sql_executar;
}

function func_alterar_imagem_usuario($link_imagem, $id_usuario)
{
    global $conn;

    $sql = "UPDATE quero_sucesso.TB_Usuario SET link_imagem ='" . $link_imagem . "'WHERE id_usuario ='" . $id_usuario . "'";

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

function func_buscar_email($email)
{
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

function func_buscar_id_usuario($id_usuario, $tabela)
{
    global $conn;

    $sql = "SELECT * FROM quero_sucesso.'" . $tabela . "'
    WHERE id_usuario ='" . $id_usuario . "'";

    $sql_executar = $conn->prepare($sql);
    $sql_executar->execute();

    $email_existente = $sql_executar->rowCount();

    return $email_existente;
}

function func_buscar_dados_pessoais($id_usuario)
{
    global $conn;

    $sql = "SELECT * FROM quero_sucesso.TB_Dados_Pessoais
    WHERE id_usuario ='" . $id_usuario . "'";

    $sql_executar = $conn->prepare($sql);
    $sql_executar->execute();

    return $sql_executar;
}