<?php
require '20.config.php';
#isset — Informa se a variável foi iniciada
if (isset($_POST['nome']) && empty($_POST['nome']) == false){
	#addslashes — Adiciona barras invertidas a uma string
	#addslashes evitar usuarios maliciosos
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
	#pdo está declado (iniciado) no config a partir do momento que faço a importação ele já herda a conexão ao banco de dados o pdo tbém
	$pdo->query($sql);
    #header — Send a raw HTTP header
	header("Location: 20.ExControleDeUsuarios.php");
	}
?>
<meta charset="utf-8">
<form method="POST">
	Nome:<br/>
	<input type="text" name="nome"><br/><br/>
	E-mail:<br/>
	<input type="text" name="email"><br/><br/>
	Senha:<br/>
	<input type="password" name="senha"><br/><br/>

	<input type="submit" value="Cadastrar"/>
</form>
