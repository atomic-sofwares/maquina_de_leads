<?php
require 'funcoes/funcoes.php';

$usuarios = func_buscar_usuarios();

$result = $usuarios->fetch(PDO::FETCH_ASSOC);

$total = $usuarios->rowCount();
echo'<pre>';
print_r($result);

