<?php
    session_start();
    
    if (!empty($_GET['id_deposito'])) { // Verificando se o id do usuario esta na URL
        include("../db/conexao.php");

    	$id_deposito = $_GET['id_deposito'];
    	
        // Removendo os imóveis cadastrados por esse usuário, caso haja, do db
        $sql = "SELECT * FROM tb_deposito WHERE id_deposito = $id_deposito";
        $sql_query = mysqli_query($conn, $sql);
        $numero_linha = $sql_query -> num_rows;
    	if($numero_linha >= 1){
            $codigo_sql = "DELETE FROM tb_deposito WHERE id_deposito = $id_deposito";
            $sql_query = $conn -> query($codigo_sql);
        }
        
        // Removendo o usuário do db
        $sql_deposito = "DELETE FROM tb_deposito WHERE id_deposito = $id_deposito";
        
        $conn -> query($sql_deposito);
        
        header("Location: ../tabelas/entrada.php");
    } else {
    	if (!isset($_SESSION['email'])) {
    	    header("Location: ../principal/index.php");
    	} else {
    	    header("Location: ../login/index.login.php");
    	}
    }
?>