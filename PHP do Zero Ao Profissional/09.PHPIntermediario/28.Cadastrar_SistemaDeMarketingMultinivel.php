<meta charset="utf-8">
<?php
session_start();
require '28.Config_SistemaDeMarketingMultinivel.php';

#recebendo os dados do formulario (da mesma pagina)
if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));
	#senha = md5 (email); caso fazer sem o campo senha
	#saber quem é o pai desse cadastro que está logado
	#id pai será o usuario da sessão
	$id_pai = $_SESSION['mmnlogin'];

	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
	$sql->bindValue(":email", $email);
	$sql->execute();

	if ($sql->rowCount() == 0){
		$sql = $pdo->prepare("INSERT INTO usuarios(id_pai, nome, email,senha) VALUES (:id_pai, :nome, :email, :senha)");
		$sql->bindValue(":id_pai", $id_pai);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute(); #inserir o usuario

		header("Location: 28.Index_SistemaDeMarketingMultinivel.php");
		exit;
	}else {
		echo "Já existe este usuário cadastrado";
	}	
}

?>
<h1>Cadastrar Novo Usuário</h1>
<form method="POST">
	<strong>Nome:</strong><br>
	<input type="nome" name="nome"><br><br>
	<strong>Email:</strong><br>
	<input type="email" name="email"><br><br>
	<strong>Senha:</strong><br>
	<input type="password" name="senha"><br><br>
	<input type="submit" value="Cadastrar">
</form>