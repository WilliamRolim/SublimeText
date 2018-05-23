<?php
session_start();
require '28.Config_SistemaDeMarketingMultinivel.php';

#se meu campo de email não estiver vazio (se for enviado)
if (!empty($_POST['email'])){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));
	#verificar se o que foi digitado está certo
	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
 $sql->bindValue(":email", $email);#substituir mail por email
 $sql->bindValue(":senha", $senha);#substituir senha por senha
 $sql->execute();

 if ($sql->rowCount() > 0){
 	$sql = $sql->fetch();
    #salvar o id do usuario logado
 	$_SESSION['mmnlogin'] =$sql['id'];

 	header("Location: 28.Index_SistemaDeMarketingMultinivel.php");
 	exit;
 }else{
 	echo "Usuario e/ou senha invalidos";
 }
}
?>
<form method="POST">
	<strong>E-mail:</strong><br/>
	<input type="email" name="email"><br><br>

	<strong>Senha:</strong><br/>
	<input type="password" name="senha"><br><br>

	<input type="submit" value="Entrar">
