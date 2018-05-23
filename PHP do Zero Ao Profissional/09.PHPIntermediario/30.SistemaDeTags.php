<?php
#Nuvem de tags -> no caso de caracteristicas
#palavras que se repetem muito vão aparecer menores
#palavras que se repetem MUITO vão aparecer MAIORES
#palavras que se repetem POUCO vão aparecer MENORES

try {
	$pdo = new PDO("mysql:dbname=projeto_tags;host=localhost","root","");
} catch (PDOException $e) {
	echo "ERRO: " .$e->getMessage();
	exit;
}

$sql = "SELECT caracteristicas FROM usuarios";
#fazendo a requisição $sql = $pdo-> query ($sql);
$sql = $pdo-> query ($sql);
#verificar se houve resultado
if ($sql->rowCount() > 0){
#vou ter um array com todas as minhas caracteristicas juntas
	$lista = $sql->fetchAll();
#pegando lista crua que pegamos do banco e gerar essa lista cada uma separadas dentro do array
	$carac = array();
#ir em cada um dos usuarios pegar todas as caracteristicas e colocar nesse array carac

	foreach ($lista as $usuario) {
	#armazenar dentro de carac já categorizando os votos (ex feliz aparece mais de uma vez , aparece a quantidade, quantas vezes a palavra se repete)
	//separar pela virgura usando o explode
		$palavras = explode(",", $usuario['caracteristicas']);
		foreach ($palavras as $palavra) {
		# Se o nome já foi inserido em carac caso for aumenta 1 
		$palavra = trim($palavra); //trim tira os espaços do começo e do fim

		if (isset($carac[$palavra])){
			//se existir essa palavra a chave é essa palavra e o valor é um número
			$carac[$palavra]++;//1 transforma em 2
		}else{
			$carac[$palavra] = 1;//caso não exista encrementa com 1
		}
	}
}
#ordenar do número maior para o menor
arsort($carac);//ordenar do maior para o menor
echo '<pre>';
print_r($carac);

	#dividir a contagem das palavras
$palavras = array_keys($carac);
$contagens = array_values($carac);

	#pegar a que tiver o maior número
	$maior = max($contagens);//vai pegar o maior e ficar em maior
	$tamanhos = array(11, 15, 20, 30);//tamanho de letras em pixel
	for ($x=0;$x<count($palavras);$x++) {
		#loop que irá dar a quantidade de palavras que temos
		$n = $contagens[$x] / $maior;// gerar um número que se baseia no maior que temos

#encaixar cada palavra em um tamanho
	#n x a quantidade de tamanho que temos e arredondamos com o ceil
		$h = ceil($n * count($tamanhos));

		//vamos ter número entre 1 e 4

		echo "<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$x]."(".$contagens[$x].")</p>";

	}
}

#dependendo da quantidade de palavras tiver ela terá um h1
?>
