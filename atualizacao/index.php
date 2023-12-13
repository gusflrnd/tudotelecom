<?php
	session_start();
	
	include_once("../db/conexao.php"); // Importa a conexão

	$mat = $_SESSION["id_usuario"];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

	// Cria comando SQL para inserir os valores da tabela cadastro
    mysqli_query($conn, "UPDATE tb_usuario set nome = '$nome', email = '$email', senha = '$senha' WHERE id_usuario = '$mat'");
	
	header('Location: ../principal/index.php');
?>