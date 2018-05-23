<?php
try {
	$pdo = new PDO("mysql:dbname=projeto01_caixaeletronico;host=localhost", "root","");
} catch (PDOException $e) {
	echo "ERRO: " .$e->getMessage();
	exit;
}
?>