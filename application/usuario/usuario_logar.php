<?php
	session_start();
    require_once("../../config/conexao.php");
    
	$idcliente = $_SESSION['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$inserir = "INSERT INTO `usuario` (`iduser`, `nome`, `email`, `nascimento`, `senha`) 
		VALUES (NULL, '$nome', '$email', '$nascimento' , '$senha')";
	
	$inserirUsuario = mysqli_query($conn, $inserir);		
	header("Location: ../../../index.php");

?>