<?php
global $pdo;
#conexao com o banco de dados e limite de niveis
try {
	$pdo = new PDO("mysql:dbname=marketing_multinivel;host=localhost", "root","");
} catch (PDOException $e) {
	echo "ERRO: " .$e->getMessage();
	exit;
}

#Estabelecendo limite de 4 niveis
$limite = 3;

#Atualiando patentes
$patentes = array(
);
?>