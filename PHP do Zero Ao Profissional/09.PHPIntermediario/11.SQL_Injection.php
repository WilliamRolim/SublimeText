<?php
#addslashes = pega todas as aspas e coloca uma barra \' dessa forma o sql vai saber que não é uma aspas de fechar o comando
#é uma aspas que faz parte da string
$autor = addslashes($_POST["autor"]);//'' or 1=1       ou    '; DROP TABLE posts;'";
#Opções de ataque que o usuario pode fazer
#$sql = "SELECT * FROM posts WHERE autor = '' or 1=1"; -- visualizar todo o banco de dados (senha login etc)
#montar nossa query comando para executar no banco de dados

$sql = "SELECT * FROM posts WHERE autor = 'William\'Rolim";

?>