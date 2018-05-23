<?php
require '20.config.php';
?>
<a href="20.adicionar.php">Adicionar Novo Usuário</a>
<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>e-mail</th>
		<th>Ações</th>
	</tr>
	<?php
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);#executando a query sql
	if($sql->rowCount() > 0){
		#echo 'OK';
		foreach ($sql->fetchAll() as $usuario) {
			echo '<tr>';
			echo '<td>' .$usuario['nome'].'</td>';
			echo '<td>' .$usuario['email'].'</td>';
			echo '<td><a href="20.editar.php?id='.$usuario['id'].'">Editar</a> - <a href="20.excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
			echo '</tr>';

		}
	}
	?>
</table>