<?php
/**
  * @author Ilicilho Netto
  * @author Ilicilho Netto <ilicilho (at) gmail.com>
  */
	require_once("inc/verificaSessao.inc.php");
	unset($_SESSION['usuario']);
	unset($_SESSION['idSessao']);
	session_destroy();
	header("Location: index.php");

?>