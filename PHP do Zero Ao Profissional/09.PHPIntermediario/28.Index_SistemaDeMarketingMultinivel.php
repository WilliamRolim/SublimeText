<meta charset="utf-8">
<?php
session_start();
require '28.Config_SistemaDeMarketingMultinivel.php';
require '28.Funcoes_SistemaDeMarketingMultinivel.php';
#se estiver vazia e não existir
if (empty($_SESSION['mmnlogin'])){
	header("Location: 28.Login_SistemaDeMarketingMultinivel.php");
	exit;
}

#saber o usuario que esta logado pegamos a partir do id dele

$id = $_SESSION['mmnlogin'];

$sql = $pdo->prepare("SELECT usuarios.nome,
patentes.nome as p_nome
FROM usuarios
LEFT JOIN patentes ON patentes.id = usuarios.patente 
WHERE usuarios.id = :id");
#puxar o nome atravez do id
$sql->bindValue(":id", $id);
$sql->execute();
#
if ($sql->rowCount() > 0){
	#se achou o usuario
	$sql = $sql->fetch();
	$nome = $sql['nome'];
	$p_nome = $sql['p_nome'];
}else {
	header("Location: 28.Login_SistemaDeMarketingMultinivel.php");
	exit;
}

#Listar o nosso cadastro
# Envia o id do usuario que está logado
$lista = listar($id,$limite);

?>
<h1>Sistema de Marketing multi nivel</h1><br>
<h2>Usuário Logado: <?php echo $nome.' ('.$p_nome.')'; ?></h2><br>

<a href="28.Cadastrar_SistemaDeMarketingMultinivel.php">Cadastrar novo Usuário</a>
<br><br>
<a href="28.Sair_SistemaDeMarketingMultinivel.php">Sair</a>
<br>
<hr>
<br>
<h4>Lista de Cadastro</h4>

<pre>
	<!-- PRIMEIRO LISTAR PRECISO DIZER QUAL É O LIMITE DE ACESSO DOS NIVEIS ($limite) -->
	<?php print_r($lista); ?>
</pre>
<br>
<ul>
<!-- mesma funcionabilidade do exibir mas deixado para aprendizado -->
<?php foreach ($lista as $usuario): ?> 
	<li><?php echo $usuario['nome']; ?></li>
<?php endforeach; ?> 
</ul>

<?php exibir($lista) ?>