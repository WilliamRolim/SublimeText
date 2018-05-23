<?php
$nomes = array('William', "André", "Maria", "Medusa" , "Amanda" );
#para cada item da variavel nome ele vai definir dentro da variavel aluno
	foreach ($nomes as $aluno) {#foreach = para cada item
		echo "Aluno: " .$aluno. "<br>";
	}

	echo "<br><br><br>";

	$nomes2 = array(
		array("nome" => "William" , "idade" =>70),
		array("nome" => "Maria" , "idade" =>40),
		array("nome" => "Yole" , "idade" =>90),
		array("nome" => "Martha" , "idade" =>20),
		array("nome" => "Creuza" , "idade" =>100)
	);

	foreach ($nomes2 as $aluno2) {
		echo "Aluno " .$aluno2["nome"]." - Idade: " .$aluno2["idade"]."<br/>";
	}
	#qualquer tipo de listagem, postagem de blogs, usuarios cadastrados 

	echo "<br><br><br>";
	$aluno = array(
		"nome" => "William Rolim",
		"idade" => "30",
		"estado" => "SP",
		"pais" => "Brasil"
	);

	foreach ($aluno as $chave => $dado) {
		echo $chave. " = " .$dado. "<br/>";
	}

#"chave" => "valor"


?>