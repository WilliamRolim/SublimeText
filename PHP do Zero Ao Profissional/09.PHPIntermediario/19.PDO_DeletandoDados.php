<meta charset="utf-8">
<?php
#DELETE Deletando Dados

$dsn = "mysql:dbname=phpcurso;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$email = "amorphis231@brasilia.com.br";
	$sql = "DELETE FROM usuarios WHERE email = '$email'";
	$pdo->query($sql);

	echo "Usuario REMOVIDO com sucesso!";
	
} catch (PDOException $e) {
	echo "Falhou: " .$e->getMessage();

}
?>