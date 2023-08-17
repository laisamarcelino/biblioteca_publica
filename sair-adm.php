<?php
	session_start();
	// limpar todas as variáveis globais
	unset($_SESSION["adm"]);
	//unset($_SESSION["nome"]);
	//unset($_SESSION["email"]);
	header("location:index.php");

	// depois direcionar para o arquivo index.php
?>
