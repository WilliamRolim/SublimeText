<?php
require '20.config.php';
$id = 0;
#faço a verificação para pegar o id atravez do get (ver browser)
if (isset($_GET['id']) && empty($_GET['id']) == false){
	$id = addslashes($_GET['id']);
}
#verifico se o usuario enviou alguma informação
if(isset($_POST['nome']) && empty($_POST['nome']) == false){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
	$pdo->query($sql);
	header("Location: 20.ExControleDeUsuarios.php");

}
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if ($sql-> rowCount() > 0){
	 	 	#fech() = pegar um resultado só (só o primeiro)
	$dado = $sql->fetch();
}else{
	header("Location: 20.ExControleDeUsuarios.php");
}
?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $dado ['nome']; ?>"<br/><br/>
	E-mail:<br/>
	<input type="text" name="email" value="<?php echo $dado ['email']; ?>"<br/><br/>

	<input type="submit" value="Cadastrar" value=""/>