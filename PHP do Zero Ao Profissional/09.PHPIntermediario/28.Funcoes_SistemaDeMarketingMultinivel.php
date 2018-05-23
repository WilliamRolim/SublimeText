<?php
function calcular_cadastros($id, $limite){
#Calcular quantos os cadastros essa pessoa tem
	$lista = array();
	global $pdo;

	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id_pai = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();
	$filhos = 0;

	if($sql->rowCount() > 0){
		$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
	#quantos filhos determinada pessoa vai ter

	$filhos = $sql->rowCount();
	#dentro da lista vou pegar cada um  dos itens e vou pegar o filho deles
		foreach($lista as $chave => $usuario) {
			if($limite > 0){
				#calcular quantos filhos diretos cada um dos indiretos tem
				$filhos += calcular_cadastros($usuario['id'], $limite-1);
		#mostra a hierarquia em cascata de todos os filhos
				
			}
		}
	}
	# vai retornar o número de filhos diretos que determinada pessoa tem
	return $filhos;
}
function listar($id, $limite){
#Listar o nosso cadastro
	$lista = array();
	global $pdo;
	#leftjoin para pegar patente do usuarios especificos e o nome da patente
	#as p_nome para não confundir com o nome do usuario
	$sql = $pdo->prepare("SELECT usuarios.id, usuarios.id_pai, usuarios.patente, usuarios.nome, patentes.nome as p_nome FROM usuarios LEFT JOIN patentes ON patentes.id = usuarios.patente WHERE usuarios.id_pai = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();
	if($sql->rowCount() > 0){
		$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
	#dentro da lista vou pegar cada um  dos itens e vou pegar o filho deles
		foreach($lista as $chave => $usuario) {
			$lista[$chave]['filhos'] = array();
			if($limite > 0){
		#mostra a hierarquia em cascata de todos os filhos
				$lista[$chave]['filhos'] = listar($usuario['id'], $limite-1);
			}
		}
	}
	return $lista;
}

function exibir($array){
	#exibir a lista direta e os determinados filhos indiretamente
	echo '<ul>';
	foreach ($array as $usuario) {
		echo '<li>';
		echo $usuario['nome'].' ('.$usuario['p_nome'].')';  


		if (count($usuario['filhos']) > 0){
			#se o usuario tem filhos dou um exibir nele
			exibir ($usuario['filhos']);
		}
		echo '</li>';
	}
	echo '</ul>';
}
?>