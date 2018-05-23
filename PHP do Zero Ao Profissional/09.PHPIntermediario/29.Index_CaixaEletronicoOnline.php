<?php
#todo login precisa do session_start()
session_start();
require "29.Config_CaixaEletronicoOnline.php";
#verificando se a pessoa está logada
if (isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
	#quando achou a sessão
	$id = $_SESSION['banco'];
	#pegarmos o id para pegarmos o restante de info da nossa conta
	$sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

    #verificar se achou *questão de segurança
	if ($sql->rowCount() > 0){
		$info = $sql->fetch(); //se tudo ocorreu bem a variavel info terá os dados do user
	}else{
		#se não achou a conta manda para o login
		header("Location: 29.Login_CaixaEletronicoOnline.php");
		exit;
	}

}else {
	header("Location: 29.Login_CaixaEletronicoOnline.php");
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Caixa eletrônico online</title>
</head>
<body>
	<h1>Banco Illuminatti</h1>
	<strong>Titular: <?php echo $info['titular']; ?></strong><br>
	<strong>Agencia: <?php echo $info['agencia']; ?></strong><br>
	<strong>Conta: <?php echo $info['conta']; ?></strong><br>
	<strong>Saldo: <?php echo $info['saldo']; ?></strong><br>
	<br>
	<a href="29.Sair_CaixaEletronicoOnline.php">Sair</a>
	<hr>
	<h3>Movimentação/Extrato</h3>
	
	<a href="29.AdicionarTransacao_CaixaEletronicoOnline.php">Adicionar Transação</a><br><br>
	<table border="1" width="400">
		<tr>
			<th>Data</th>
			<th>Valor</th>
		</tr>
		<?php
		#id_conta é a referencia da conta especifica que estamos acessando
		$sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
		$sql->bindValue(":id_conta", $id);
		$sql->execute();

		if ($sql->rowCount() >0){
			foreach ($sql->fetchAll() as $item) {
				?>
				<tr>
					<td><?php echo date('d/m/Y H:i', strtotime($item['data_operacao'])); ?></td>
						<td>
							<!-- tipo será 0 quando for um deposito e 1 quando for retirada -->
							<?php if ($item['tipo'] == '0'): ?>
								<font color="green">R$ <?php echo $item['valor'] ?></font>
							<?php else: ?>
								<font color="red">-R$ <?php echo $item['valor'] ?></font>
							<?php endif; ?>
						</td>
					</tr>
					<?php
				}
			}
			?>
		</table>
	</body>
	</html>