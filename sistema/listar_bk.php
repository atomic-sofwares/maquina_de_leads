<a href="index.html">Voltar</a>
<?php
if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
exit;
}

if(!function_exists("Abre_Conexao")) {
echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
exit;
}

Abre_Conexao();
$re = mysql_query("SELECT * FROM usuarios INNER JOIN estados ON usuarios.fk_estado = estados.id_estado ORDER BY usuarios.nome;");
if(mysql_errno() != 0) {
if(!isset($erros)) {
	echo "Erro o arquivo init.php foi auterado, nao existe $erros";
	exit;
}
echo $erros[mysql_errno()];
exit;
}
?>

<table width="100%" border="1">
<tr>
	<td>Ações</td>
	<td>Nome</td>
	<td>Email</td>
	<td>Data Nasc.</td>
	<td>Sexo</td>
	<td>Preferencias</td>
	<td>salario</td>
	<td>Endereço</td>
	<td>Bairro</td>
	<td>Cidade</td>
	<td>Estado</td>
	<td>Login</td>
</tr>
<?php
while($l = mysql_fetch_array($re)) {
$id          = $l["id_usuario"];
$nome        = $l["nome"];
$email       = $l["email"];
$data        = implode("/", array_reverse(explode("-", $l["data_nascimento"])));
$sexo        = $l["sexo"] == "M" ? "Masculino" : "Feminino";
$preferencia = Pega_Preferencia($l["preferencias"]);
$salario     = $l["salario"];
$endereco    = $l["endereco"];
$bairro      = $l["bairro"];
$cidade      = $l["cidade"];
$estado      = $l["estado"];
$login       = $l["login"];

echo "
<tr>
	<td><a href=\"editar.php?id=$id\">[Editar]</a> <a href=\"excluir.php?id=$id\">[Excluir]</a></td>
	<td> $nome</td>		
	<td> $email</td>
	<td> $data</td>
	<td> $sexo</td>
	<td> ". monta_combo($preferencia). "</td>
	<td> ". number_format($salario, 2, ",", "."). "</td>
	<td> $endereco</td>
	<td> $bairro</td>
	<td> $cidade</td>
	<td> $estado</td>
	<td> $login</td>
</tr>\n";
}	
@mysql_close();
?>	
</table>