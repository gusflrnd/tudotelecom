<?php
    session_start();
    
    if (!empty($_GET['id_saque'])) { // Verificando se o id do usuario esta na URL
        include("../db/conexao.php");

    	$id_saque = $_GET['id_saque'];
    	
        // Removendo os imóveis cadastrados por esse usuário, caso haja, do db
        $sql = "SELECT * FROM saque WHERE id_saque = $id_saque";
        $sql_query = mysqli_query($conn, $sql);
        $numero_linha = $sql_query -> num_rows;
    	if($numero_linha >= 1){
            $codigo_sql = "DELETE FROM saque WHERE id_saque = $id_saque";
            $sql_query = $conn -> query($codigo_sql);
        }
        
        // Removendo o usuário do db
        $sql_saque = "DELETE FROM saque WHERE id_saque = $id_saque";
        
        $conn -> query($sql_saque);
        
        header("Location: ../tabelas/saida.php");
    } else {
    	if (!isset($_SESSION['email'])) {
    	    header("Location: ../principal/index.php");
    	} else {
    	    header("Location: ../login/index.login.php");
    	}
    }
?>