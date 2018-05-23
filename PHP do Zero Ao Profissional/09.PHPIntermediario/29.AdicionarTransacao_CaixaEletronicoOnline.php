<?php
session_start();
require '29.Config_CaixaEletronicoOnline.php';
/*VALOR ex: 19.50 padrão americana -- 19,50 padrão brasileiro - para aceitarmos esse valor fazemos convertemos tudo o que for virgula para ponto com str_replace ele procura os parametros passados dentro do Post */
if (isset($_POST['tipo'])){
	$tipo = $_POST['tipo'];
	$valor = str_replace(",", ".", $_POST['valor']);
	$valor = floatval($valor);#floatval convertendo para float

	$sql = $pdo->prepare("INSERT INTO historico (id_conta,tipo,valor,data_operacao) VALUES (:id_conta,:tipo,:valor, NOW())");
	$sql->bindValue(":id_conta", $_SESSION['banco']);
	$sql->bindValue(":tipo",$tipo);
	$sql->bindValue("valor", $valor);
	$sql->execute();
	#ao adicionar a movimentação   saldo na conta
	if ($tipo == '0'){
		//Deposito
		$sql = $pdo->prepare ("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['banco']);
		$sql->execute();
	}else {
		$sql = $pdo->prepare ("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
		$sql->bindValue(":valor", $valor);
		$sql->bindValue(":id", $_SESSION['banco']);
		$sql->execute();
	}
	header("Location:29.Index_CaixaEletronicoOnline.php");
	exit;
}
 #inserindo dados no historico , vai para o index e exibe na tela

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caixa eletrônico online</title>
</head>
<body>
	<form method="POST">
		<!-- precisamos dovalor e do tipo da operação -->
		<strong>Tipo de Transação:</strong><br>
		<select name="tipo">
			<option value="0">Depósito</option>
			<option value="1">Retirada</option>
		</select><br><br>

		<strong>Valor:</strong><br>
		<!-- Previnir que adicione textos, somente números -->
		<input type="text" name="valor" pattern="[0-9.,]{1,}"><br><br> <!-- pattern qual tipo de dados que deve ser aceito no campo (recurso do html 5) expressão regular dentro do pattern <!DOCTYPE html> -->

		<input type="submit" value="Adicionar">

	</form>
</body>
</html>