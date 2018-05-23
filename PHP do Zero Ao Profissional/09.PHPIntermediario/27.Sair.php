<?php
session_start();
unset($_SESSION['logado']);
header("Location: 27.RegistroPorConvite.php");
exit;