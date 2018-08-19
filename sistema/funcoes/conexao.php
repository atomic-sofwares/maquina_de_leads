<?php
$servidor_mysql = '127.0.0.1';
$nome_banco = 'quero_sucesso';
$usuario = 'root';
$senha = '@atomic123';
global $conn;
$conn = new PDO("mysql:host=$servidor_mysql","$usuario","$senha");
