<?php
session_start();
require '27.Config.php';

#verificar se o codigo foi enviado e se é um codigo valido
if(!empty($_GET['codigo'])) {
	$codigo = addslashes($_GET['codigo']);
	#verificar se esse codigo existe
	$sql = "SELECT * FROM usuarios WHERE codigo = '$codigo'";
	$sql = $pdo->query($sql);
	#se tiver resultado significa que achou
	if($sql->rowCount() == 0) {
		header("Location: 27.Login.php");
		exit;
	}
} else {
	header("Location: 27.Login.php");
	exit;
}

if(!empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$senha = md5($_POST['senha']);

	$sql = "SELECT * FROM usuarios WHERE email = '$email'";
	$sql = $pdo->query($sql);
#se não existir uma pessoa com esse email ele inseres
	if($sql->rowCount() <= 0) {

		$codigo = md5(rand(0,99999).rand(0,99999));
		$sql = "INSERT INTO usuarios (email, senha, codigo) VALUES ('$email', '$senha', '$codigo')";
		$sql = $pdo->query($sql);

		unset($_SESSION['logado']);

		header("Location: 27.RegistroPorConvite.php");
		exit;
	}
}
?>
<h3>Cadastrar</h3>

<form method="POST">
	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Senha:<br/>
	<input type="password" name="senha" /><br/><br/>

	<input type="submit" value="Cadastrar" />
</form>