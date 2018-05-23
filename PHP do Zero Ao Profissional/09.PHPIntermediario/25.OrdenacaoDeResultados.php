<?php
try {
	$pdo = new PDO("mysql:dbname=projeto_ordenarVinteCinco;host=localhost", "root","");
} catch (PDOException $e) {
	echo "ERRO: " .$e->getMessage();
	exit;
}

	if (isset($_GET['ordem']) && !empty($_GET['ordem'])){
		#verifica se teve envio
		$ordem = addslashes($_GET['ordem']);
		$sql = "SELECT * FROM usuarios ORDER BY " .$ordem;
	}else {
		#caso não tenha sido enviado
		$ordem = '';
		$sql = "SELECT * FROM usuarios";
	}

?>
<form method="GET">
	<select name="ordem" onchange="this.form.submit()"><!--onchance = ao mudar ->Enviar o formulario -->
		<option></option>
		                     <!-- echo especial  (if especial) se for selected caso contrario coloca em branco '' -->
		<option value="nome" <?php echo ($ordem =="nome")?'selected="selected"':''; ?>>Pelo nome</option>

		<option value="idade"<?php echo ($ordem =="idade")?'selected="selected"':''; ?>>Pela idade</option>
	</select>
</form>
<br>
<table border="1" width="400">
	<tr>
		<th><strong>Nome</strong></th>
		<th><strong>Idade</strong></th>
	</tr>
	<!-- listagem dos itens -->
	<?php
	#

	$sql = $pdo->query($sql);
	if($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $usuario):
			?>
			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td><center><?php echo $usuario['idade']; ?></center></td>
			</tr>
			<?php
		endforeach;
	}
	?>
</table>

