<?php
    session_start();
    
    if (!empty($_GET['id_saldo'])) { // Verificando se o id do usuario esta na URL
        include("../db/conexao.php");

    	$id_saldo = $_GET['id_saldo'];
    	
        // Removendo os imóveis cadastrados por esse usuário, caso haja, do db
        $sql = "SELECT * FROM saldo WHERE id_saldo = $id_saldo";
        $sql_query = mysqli_query($conn, $sql);
        $numero_linha = $sql_query -> num_rows;
    	if($numero_linha >= 1){
            $codigo_sql = "DELETE FROM saldo WHERE id_saldo = $id_saldo";
            $sql_query = $conn -> query($codigo_sql);
        }
        
        // Removendo o usuário do db
        $sql_deposito = "DELETE FROM saldo WHERE id_saldo = $id_saldo";
        
        $conn -> query($sql_deposito);
        
        header("Location: ../tabelas/total.php");
    } else {
    	if (!isset($_SESSION['email'])) {
    	    header("Location: ../principal/index.php");
    	} else {
    	    header("Location: ../login/index.login.php");
    	}
    }
?>