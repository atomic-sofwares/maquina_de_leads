<?php
require  'funcoes.php';

$insert = func_inserir_usuario($_REQUEST);
print_r($insert);