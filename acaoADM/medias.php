<?php
    session_start();
    
    if (!empty($_GET['id_medias'])) { // Verificando se o id do usuario esta na URL
        include("../db/conexao.php");

    	$id_medias = $_GET['id_medias'];
    	
        // Removendo os imóveis cadastrados por esse usuário, caso haja, do db
        $sql = "SELECT * FROM tb_medias WHERE id_medias = $id_medias";
        $sql_query = mysqli_query($conn, $sql);
        $numero_linha = $sql_query -> num_rows;
    	if($numero_linha >= 1){
            $codigo_sql = "DELETE FROM tb_medias WHERE id_medias = $id_medias";
            $sql_query = $conn -> query($codigo_sql);
        }
        
        // Removendo o usuário do db
        $sql_saque = "DELETE FROM tb_medias WHERE id_medias = $id_medias";
        
        $conn -> query($sql_saque);
        
        header("Location: ../tabelas/media.php");
    } else {
    	if (!isset($_SESSION['email'])) {
    	    header("Location: ../principal/index.php");
    	} else {
    	    header("Location: ../login/index.login.php");
    	}
    }
?>