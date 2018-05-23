<meta charset="utf-8">
<?php
session_start();
#criar script para atualizar
#será executado apenas pelo servidor
#no final do dia

require '28.Config_SistemaDeMarketingMultinivel.php';
require '28.Funcoes_SistemaDeMarketingMultinivel.php';

#precisamos pegar a lista de todas as patentes
#precisamos pegar a lista do primeiro usuario
#calculamos quando filhos o usuario tem
# identificamos a patente do usuario

$sql = "SELECT id FROM usuarios";
$sql = $pdo->query($sql);
$usuarios = array();

if ($sql->rowCount() > 0){
	$usuarios = $sql->fetchAll();
	foreach($usuarios as $chave => $usuario){
		$usuarios[$chave]['filhos'] = calcular_cadastros($usuario['id'], $limite);

	}
}
echo '<pre>';
print_r($usuarios);

$sql = "SELECT * FROM patentes ORDER BY minimo DESC";
$sql = $pdo->query($sql);
$patentes = array();
if ($sql->rowCount() > 0) {
	$patentes = $sql->fetchAll();
}
#quais são as patentes
#quantidade de filhos e baseado na quantidade de filhos
#vamos comparar com as patentes
foreach ($usuarios as $usuario) {
	#DENTRO de cada usuario percorremos todas as patentes para saber qual é a patente do usuario especifico
	foreach ($patentes as $patente) {
		if (intval($usuario['filhos']) >= intval($patente['minimo'])){
			#se a quantidade de cadastros for maior ou igual ao minimo requerido para aquela patente o cara é a aquela patente
			$sql = "UPDATE usuarios SET patente = :patente WHERE id = :id;";
			$sql = $pdo->prepare($sql);
			$sql->bindValue(":patente", $patente['id']);
			$sql->bindValue(":id", $usuario['id']);
			$sql->execute();

			break;/*se a condição for satisfeita ele encerra e vai para o proximo usuario */
		}
	}
}
?>

