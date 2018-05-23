<meta charset="utf-8">
<?php
echo "</br><strong>array_keys — Retorna todas as chaves ou uma parte das chaves de um array</strong></br>";
$array = array(
"nome" => "William",
"idade"=> 37,
"cidade" => "São Paulo",
"país" => "Brasil",
"idioma" => "Portugues");

$array2 = array_keys($array);

print_r($array2);
echo "</br><strong>array_values — Retorna todos os VALORES de um array</strong></br>";

$array3 = array_values($array);

print_r($array3);

echo "</br><strong>asort — Ordena um array mantendo a associação entre índices e valores LEMBRANDO: ORDEM ALFABETICA DOS VALORES NÃO DAS CHAVES</strong></br>";

asort($array);

print_r($array);

echo "</br><strong>arsort — Ordena um array em ordem descrescente mantendo a associação entre índices e valores</strong></br>";

arsort($array);

print_r($array);

echo "</br><strong>Praticando</strong><br>";

$vetor = array(
"José",
"Alexandre",
"Muriel",
"Camila",
"William",
"Yole",
"Rodrigo");

asort($vetor);
print_r($vetor);

echo "</br><strong>count — Conta o número de elementos de uma variável, ou propriedades de um objeto</strong></br>";
echo "Total Alunos..: " .count($vetor);

echo "</br><strong>in_array — Checa se um valor existe em um array</strong></br>";
if (in_array("William", $vetor)){
	echo "Vencedor foi william";
}
echo "</br><strong>array_pop — Extrai um elemento do final do array</strong></br>";

array_pop($array);
print_r($array);

echo "</br><strong>array_shift — Retira o primeiro elemento de um array</strong></br>";

array_shift($array);
print_r($array);



?>