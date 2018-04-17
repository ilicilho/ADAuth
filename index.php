<?php
 /**
  * @author Ilicilho Netto
  * @author Ilicilho Netto <ilicilho (at) gmail.com>
  */



require_once("authenticate.php");

// Verificar se o formulário de login foi enviado
if(isset($_POST['userLogin'])){
	// Executar a autenticação no LDAP
	if(authenticate($_POST['userLogin'],$_POST['userPassword']))
	{
		// Se a autenticação for válida
		header("Location: principal.php");
		die();
	} else {
		// Senão mostra o erro de autenticação
		$error = 1;
	}
}

// Erro para mostrar ao usuário
if (isset($error)) echo "<p align=\"center\"><font color=\"red\"><b>Erro de login: Usuário/Senha incorretos!!!</b></font></p><br /><br />";

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Autenticacao no AD</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body onLoad="document.formLogin.userLogin.focus();">


<form method="post" name="formLogin" action="index.php">
	<table width="200" border="0" align="center">
	  <tr>
	    <td><img src="images/<yourlogohere.jpg>" width="222" height="140"></td>
      </tr>
  </table>
	<table width="200" border="0" align="center">
	  <tr>
	    <td><table width="210" height="172" border="0" cellpadding="0" cellspacing="0">
	      <tr>
	        <td width="210"><div align="center"><font color="#000000" size="1" face="verdana"><b>Usu&aacute;rio:</b></font> </div></td>
          </tr>
	      <tr>
	        <td><div align="center">
	          <input name="userLogin" type="text" class="caixa_texto" style="background:#FFFFFF url(images/icon_user.gif) no-repeat left; padding:2px 0px 2px 22px;"/>
	        </div></td>
          </tr>
	      <tr>
	        <td><div align="center"><font color="#000000" size="1" face="verdana"><b>Senha:</b></font></div></td>
          </tr>
	      <tr>
	        <td><div align="center">
	          <input name="userPassword" type="password" class="caixa_texto" style="background:#FFFFFF url(images/icon_pass.gif) no-repeat left; padding:2px 0px 2px 22px;"/>
	        </div></td>
          </tr>
	      <tr>
	        <td height="55"><div align="center"> <font color="#000000">
	          <input type="submit" name="submit2" value="Entrar" class="botoes" />
	        </font></div></td>
          </tr>
	      <tr>
	        <td height="21">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
  </table>
<br />
</form>
</body>
</html>