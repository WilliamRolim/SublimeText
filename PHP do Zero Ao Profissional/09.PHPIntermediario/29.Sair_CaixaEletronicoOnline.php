<?php
session_start();

#unset destruir a sessão banco
unset($_SESSION["banco"]);
#apos desetar *destruuir volta para o index
header("Location: 29.Index_CaixaEletronicoOnline.php");
exit;
?>