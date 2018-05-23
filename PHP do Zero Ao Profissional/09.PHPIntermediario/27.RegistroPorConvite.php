<?php
session_start();
require '27.config.php';

#verificando se tem sessão se o usuario está logado
if (empty($_SESSION['logado'])){
	#se não tiver envia para o login
	header("Location: 27.Login.php");
	exit;
}

$email = '';
$sql = "SELECT email, codigo FROM usuarios WHERE id = '".addslashes($_SESSION['logado'])."'";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0){
	$info = $sql->fetch();
	$email = $info['email'];
	$codigo = $info['codigo'];
}
?>
<h1>Area Interna do sistema</h1>
<p>Usuário: <?php echo $email; ?> - <a href="27.Sair.php">Sair</p>
	<p>Link: http://localhost/09.phpintermediario/27.Cadastrar.php?codigo=<?php echo $codigo; ?></p>