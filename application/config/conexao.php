<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "jsday";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if (mysqli_connect_errno()){
		echo "Erro ao conectar: " . mysqli_connect_errno();
		die();
	}
?>