<?php
/**
  * @author Ilicilho Netto
  * @author Ilicilho Netto <ilicilho (at) gmail.com>
  */
  
// Inicializa a sess�o
session_start();

// Se n�o existir as vari�veis registradas na sess�o, ent�o a p�gina n�o ser� acessada

if(!isset($_SESSION['usuario']) || !isset($_SESSION['idSessao'])) {
	session_destroy();
	Header("Location: index.php");
}
else {
	// Compara o ID da sess�o
	$sessaoID = session_id();
	
	if($sessaoID != $_SESSION['idSessao']) {
		session_destroy();
		Header("Location: index.php");
	}
}

?>