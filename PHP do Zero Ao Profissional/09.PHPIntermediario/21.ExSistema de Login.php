<?php
session_start(); #criar sessão
#$_SESSION variavel global que guarda sessão
if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
	echo "Area Restrita";
}else{
	#mudar o cabeçalho da pagina
	header("Location:21.ExLogin.php");
}
?>