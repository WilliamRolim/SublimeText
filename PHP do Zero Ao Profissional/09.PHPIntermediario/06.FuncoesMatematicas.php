<meta charset="utf-8">
<?php
#abs retorna o valor absoluto
echo "<br> <strong>Funçao Absoluta abs</strong> <br>";
echo abs (-10);

echo "<br> <strong>Round arredonda o número baseado no proprio número</strong> <br>";
echo round(2.7);
echo "<br> <strong>ceil arredonda para cima</strong> <br>";
echo ceil (2.7);

echo "<br> <strong>Floor Arredonda frações para baixo</strong> <br>";
echo floor (2.9);

echo "<br> <strong>Rand retorna um inteiro aleatorio entre 1,60</strong> <br>";
echo rand(1,60);

echo "<br> <strong>Sorteio</strong> <br>";

$lista = array("William", "Maria", "Clyver", "Creuza", "Amanda");
$x = rand(0,4);

echo "E o ganhador é..:  " .$lista[$x];
?>