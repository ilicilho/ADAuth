<?php
/**
  * @author Ilicilho Netto
  * @author Ilicilho Netto <ilicilho (at) gmail.com>
  */
  
// Inicializa a sessão
session_start();

// Se não existir as variáveis registradas na sessão, então a página não será acessada

if(!isset($_SESSION['usuario']) || !isset($_SESSION['idSessao'])) {
	session_destroy();
	Header("Location: index.php");
}
else {
	// Compara o ID da sessão
	$sessaoID = session_id();
	
	if($sessaoID != $_SESSION['idSessao']) {
		session_destroy();
		Header("Location: index.php");
	}
}

?>