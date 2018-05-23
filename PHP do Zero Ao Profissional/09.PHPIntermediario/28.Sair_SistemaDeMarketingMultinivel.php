<?php
session_start();
unset($_SESSION['mnlogin']);#tirar a sessão (tirar o login)
header("Location: 28.Login_SistemaDeMarketingMultinivel.php");
#redirecionar para pagina de login
exit;
?>