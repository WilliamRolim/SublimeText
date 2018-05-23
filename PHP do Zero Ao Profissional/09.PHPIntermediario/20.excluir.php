<?php
 require '20.config.php';

 if (isset($_GET['id']) && empty($_GET['id']) == false){
 	$id = addslashes($_GET['id']);
 	$sql = "DELETE FROM usuarios WHERE id = '$id'";
 	$pdo->query($sql);

 	header("Location: 20.ExControleDeUsuarios.php");
 }else{
 	header("Location: 20.ExControleDeUsuarios.php");
 }
?>