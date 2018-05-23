<meta charset="utf-8">
<?php
#Alterando dados no banco ->UPDATE

$dsn = "mysql:dbname=phpcurso;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$nome = "Baleiza azulada";
	$email = "amorphis231@brasilia.com.br";
	$senha = md5("1235");
	$sql = "UPDATE usuarios SET nome = '$nome', email = '$email',senha = '$senha' WHERE email = 'amorphis@brasilia.com.br'";
	$sql = $pdo->query($sql);

	echo "Usuario alterado com sucesso!";
	
} catch (PDOException $e) {
	echo "Falhou: " .$e->getMessage();

}
?>