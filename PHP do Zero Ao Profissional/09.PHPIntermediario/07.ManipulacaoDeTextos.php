<meta charset="utf-8">
<?php
echo "<br> <strong>explode - Divide uma string em strings</strong> <br>";

$nome = "William Rolim";
echo "<br> <strong>explode (espaço, sobrenome)</strong> <br>";
$x = explode(" ", $nome);
print_r($x);

echo "<br> <strong>implode implode — Junta elementos de uma matriz em uma string</strong> <br>";

$array = array ("William" ,"Rolim" , "Santana");

$nomeCompleto = implode("¨¨¨¨", $array);
echo $nomeCompleto;
echo "</br><strong>number_format() retorna números apos a virgula - (numero, 2 numeros apos a virgua)</strong></br>";
$x = number_format(8.2843454565546, 2);

echo $x;
echo "</br><strong>Padrão nacional</strong></br>";
$y = number_format(34989.12123, 3,",",".");

echo $y;
echo "</br><strong>str_replace — Substitui todas as ocorrências da string de procura com a string de substituição str_replace(search, replace, subject)</strong></br>";
$texto = "O rato roeu a roupa do rei de roma";
$string = str_replace("roeu", "comeu", $texto);
echo $string;

echo "</br><strong>strtolower — Converte uma string para minúsculas</strong></br>";

echo strtolower("WILLIAM ROLIM DE SANTANA");

echo "</br><strong>strtoupper — Converte uma string para maiúsculas</strong></br>";
echo strtoupper ("william rolim de santana");

echo "</br><strong>substr — Retorna uma parte de uma string substr(string, start)</strong></br>";
$texto = "William Rolim";
$b = substr($texto, 0, 3);

echo $b;

echo "</br><strong>ucfirst — Converte para maiúscula o primeiro caractere de uma string</strong></br>";

$nome = "william rolim";
echo ucfirst($nome);

echo "</br><strong>ucwords — Converte para maiúsculas o primeiro caractere de cada palavra</strong></br>";

$nome = "william rolim de santana";

echo ucwords($nome);


echo mb_strtolower("<br><br>formatando acentuação<br>utilizando UTF8<br>VOCÊ É DEMAIS!", "UTF-8");

?>