<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "converte";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	mysqli_query($conn,"SET NAMES 'utf8'");
	mysqli_query($conn,"SET character_set_connection = utf8 'utf8'");
	mysqli_query($conn,"SET character_set_client = utf8'");
	mysqli_query($conn,"SET character_set_results = utf8");
	
?>