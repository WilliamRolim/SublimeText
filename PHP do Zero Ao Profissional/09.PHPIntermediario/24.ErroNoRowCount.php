<!-- ERRO PROPOSITAL PARA TESTAR O PARAMETRO PDO ATTR_ERRMODE -->
<meta charset="utf-8">
<?php	
#Erro no row count significa que r a função query não aconteceu
#Alguma coisa errada na conexão do banco de dados, nome errado, usuario senha ou errado, erro de sintaxe
$dsn = "mysql:dbname=phpcurso;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	#ATTR_ERRMODE...Obrigando a mostrar o erro interno que aconteceu
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT * FROM usuariosS";


	$sql = $pdo->query($sql);	
	echo "Total de usuarios: " .$sql->rowCount();
	} catch (PDOException $e) {
	echo "Falhou: " .$e->getMessage();
}


?>
