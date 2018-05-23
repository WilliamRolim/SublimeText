<meta charset="utf-8">
<?php
$dsn = "mysql:dbname=convite;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	echo "Falhou A conexão: " .$e->getMessage();
}

?>
