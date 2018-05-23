<?php
session_start();#Se estiver usando sessão todos arquivos tem que ser abertos com uma sessão

if (isset($_POST['email']) && empty($_POST['email']) == false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";


	try {
		$db = new PDO($dsn, $dbuser, $dbpass); #feito isso conecta

		$sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		if ($sql->rowCount() > 0){#rowCount quantos registros foram retornados
			$dado = $sql->fetch();#fetch primeiro resultado da lista
			#fetch all todos os resultados
			#variavel dado é um array com todas informações do usuario logado
			#print_r($dado);
			$_SESSION['id'] = $dado['id'];
			header("Location: 21.ExSistema de Login.php");

		}


	} catch (PDOException $e) {
		echo "Falhou: " .$e->getMessage();
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
	<section>
		<form method="POST">
			<strong>E-mail:</strong><br/>
			<input type="email" name="email"> <br><br>
			<strong>Senha:</strong><br/>
			<input type="senha" name="senha"> <br><br>
			<input type="submit" value="Entrar">
		</form>
	</section>
</body>
</html>
