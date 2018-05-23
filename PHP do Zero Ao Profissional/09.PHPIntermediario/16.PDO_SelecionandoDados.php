<meta charset="utf-8">
<?php	
$dsn = "mysql:dbname=phpcurso;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

	$sql = "SELECT * FROM usuarios";

	#pegar a string e mandar para o pdo
	$sql = $pdo->query($sql);	#usando a mesma variavel para economia de memoria

	if($sql->rowCount() > 0){#row Countconte as linhas
		#fetchAll pegar todos os resultados do Select e transformar em array e vai inserir na variavel $usuario
		foreach($sql->fetchAll() as $usuario){
			echo "Nome.: " .$usuario["nome"]." - "."Email.: ".$usuario["email"]." - "."Senha..: ".$usuario["senha"]."<br>";
		}
		#echo "Há usuarios cadastrados";
	}else {
		echo "Não há usuarios cadastrados";
	}
} catch (PDOException $e) {
	echo "Falhou: " .$e->getMessage();

}
?>