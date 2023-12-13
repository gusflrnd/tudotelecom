<?php
session_start();

    include('../db/conexao.php');

    // Pegando o digitado nos inputs
    $data = $_POST['data'];
    $valor_inicial = $_POST['valor_inicial'];
    $valor_final = $_POST['valor_final'];
    $resultado = $_POST['resultado'];
    $estado = $_POST['estado'];
   
    
  $sql = "INSERT INTO saldo VALUES (null, '$data','$valor_inicial','$valor_final','$resultado','$estado')";


  $conn -> query($sql); // Executando sql de cadastro de usuário no banco
        
  // Executando o sql no banco e colocando o resultado dessa execução na variável '$execucao_sql_usuario_dados' (EM FORMA DE TABELA)

  header("Location: ../principal/index.php");
   
?>