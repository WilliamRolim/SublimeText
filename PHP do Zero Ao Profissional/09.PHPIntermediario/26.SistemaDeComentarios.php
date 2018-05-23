<?php
try {
	$pdo = new PDO("mysql:dbname=sistemadecomentarios_vinteeseis;host=localhost","root","");
} catch (PDOException $e) {
	echo "ERRO: " .$e->getMessage();
	exit;
}
?>

<?php
#RECEBENDO OS DADOS QUANDO HOUVER UM ENVIO
#isset — Informa se a variável foi iniciada
if (isset($_POST['nome']) && !empty($_POST['nome'])){
	$nome = $_POST['nome'];
	$mensagem = $_POST['mensagem'];
	#$data_msg = $_POST['data_msg'];
	#NOW FUNÇÃO DO SQL QUE PEGA A DATA ATUAL;
	$sql = $pdo->prepare("INSERT INTO mensagem SET nome = :nome, msg = :msg,data_msg = NOW()");
	$sql->bindValue(":nome", $nome);#adicionando os itens
	$sql->bindValue(":msg", $mensagem);
	#$sql->bindValue(":msg", $data_msg);
	$sql->execute();
}
?>
<fieldset><!-- cria um retangulo em volta -->
	<form method="POST">
		<strong>Nome: </strong><br>
		<input type="text" name="nome"><br><br>

		<strong>Mensagem: </strong><br>
		<textarea name="mensagem"></textarea><br><br>
		<input type="submit" value="Enviar Mensagem">
	</form>
</fieldset>
<br><br>

<?php
$sql = "SELECT * FROM mensagem ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
	#print_r($sql);
if($sql->rowCount() > 0){
	#repetir o foreach quantas vezes forem necessarias de acordo com a quantidade de mensagens
	foreach ($sql->fetchall() as $mensagem):
		print_r($mensagem);
		?>
		<br><br>
		<strong><?php echo $mensagem['nome']; ?></strong><br>
		<?php echo $mensagem['msg']; ?><br>
		<font size="1"><?#php echo $mensagem['data_msg']; ?></font>
		<hr/>
		<?php
	endforeach;
}else{
	echo "Não já mensagens.";
}
?>

