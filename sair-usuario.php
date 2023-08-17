<?php
	session_start();
	// limpar todas as variáveis globais
	unset($_SESSION["id_codigo"]);
	unset($_SESSION["nome"]);
	unset($_SESSION["identificacao"]);
	header("location:index.php");

	// depois direcionar para o arquivo index.php
?>
