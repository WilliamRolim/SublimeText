<meta charset="utf-8">
<?php
#Inserindo dados no banco ->INSERT

$dsn = "mysql:dbname=phpcurso;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	$nome = "Baleiza azul";
	$email = "amorphis@brasilia.com.br";
	$senha = md5("123");
	#aspas duplas interpretam variaveis
	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email',senha = '$senha'";
	$sql = $pdo->query($sql);
	#lastInsertId() = pega o ultimo id inserido
	echo "Usuário inserido " .$pdo->lastInsertId();

	
} catch (PDOException $e) {
	echo "Falhou: " .$e->getMessage();

}
?>