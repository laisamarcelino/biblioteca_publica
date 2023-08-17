<?php
function conecta_mysql(){
	$host = "mysql669.umbler.com";
	$usuario = "bibliotecajnb";
	$senha = "edgelalu";
	$nome_bd = "tcc";

	$conexao = mysqli_connect($host,$usuario,$senha,$nome_bd);
	mysqli_set_charset($conexao, "utf8");

	return $conexao;
}


?>
