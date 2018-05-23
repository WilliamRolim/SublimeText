	<meta charset="utf-8">

<?php
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date("d/m/Y às\s H:i:s");#Dia/mes/ano  hours i second 'as\barra invertida representa texto'
echo $dataAtual;
#int time ( void )
#Retorna a hora atual medida no número de segundos desde a Era Unix (January 1 1970 00:00:00 GMT).

#mktime retorna a quatindade de segundos que se passaram através dos parametros passados

#strtotime — Interpreta qualquer descrição de data/hora em texto em inglês em timestamp Unix
echo "<br> <strong>Função TIME</strong> <br>";
$x = time();

echo $x;
echo "<br> <strong>Visualizar segundos com strtotime</strong> <br>";
echo "<br> <strong>Quantos segundos tem desde o marco ZERO</strong> <br>";
echo "<br> <strong>Quantidade de dia, marco zero</strong> <br>";
echo strtotime("+1 days", 0);

#strtotime pegar a quantidade de segundos atual e adicionar 10 dias
echo "<br> <strong>strtotime -- <br>Adicionando 10 dias a data atual</strong> <br>";

$dataproxima = date('d/m/Y', strtotime("+10 days"));

echo "Seu produto chega em : " .$dataproxima;
?>