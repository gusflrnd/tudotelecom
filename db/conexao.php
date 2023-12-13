<?php 
    // Dados de conexão
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'caixa_td_telecom';
    
    // Variável de conexão
    $conn = mysqli_connect($host, $usuario, $senha, $bd);

    // Verifica a conexão
	if(!$conn){
		die("ERROR: Não foi possível conectar a base de dados " . mysqli_connect_error());
	}
?>