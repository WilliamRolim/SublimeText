<?php
session_start();
require '29.Config_CaixaEletronicoOnline.php';
#verificar se houve envio desses dados (agencia)
if (isset($_POST['agencia']) && empty($_POST['agencia']) == false){
	$agencia = addslashes($_POST['agencia']);
	$conta = addslashes($_POST['conta']);
	$senha = addslashes($_POST['senha']);

	#verificando os dados
	$sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
	#bindValue: Vincula um valor a um parâmetro ->Vincula um valor a um espaço reservado de nome ou ponto de interrogação correspondente na instrução SQL que foi usada para preparar a instrução.
	$sql->bindValue(":agencia", $agencia);
	$sql->bindValue(":conta", $conta);
	$sql->bindValue(":senha",md5($senha));

		$sql->execute();


	#verificando se encontrou algum retorno com essa agencia, conta e senha

		if ($sql->rowCount() > 0){#rowcont retorna o nº de linhas da consulta do banco de dados
			#fetch() = Busca a próxima linha de um conjunto de resultados;
			$sql = $sql->fetch();#pegando os dados com o fetch

			$_SESSION['banco'] = $sql['id'];//substituir a sessão e voltar para o indice
			#$_SESSION: Esta é uma 'superglobal', ou global automática, variável. Isto simplismente significa que ela está disponível em todos escopos pelo script. Não há necessidade de fazer global $variable; para acessá-la dentro de uma função ou método.
			header("Location: 29.Index_CaixaEletronicoOnline.php");
			exit;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caixa eletrônico online</title>
</head>
<body>
	<form method="POST"><!-- sem action que ele vai enviar para a propria pagina login php -->
		<strong>Agência:</strong><br/>
		<input type="text" name="agencia"/><br/><br/>
		<strong>Conta:</strong><br/>
		<input type="text" name="conta"/><br/><br/>
		<strong>Senha:</strong><br/>
		<input type="password" name="senha"/><br/><br/>

		<input type="submit" value="Entrar">


	</form>
</body>
</html>