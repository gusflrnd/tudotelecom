<?php
    include('../db/conexao.php'); // Importando a conexão
   
    // Pegando o digitado nos inputs
    $valor = $_POST['valor'];
    $depositante = $_POST['depositante'];
    $depositario = $_POST['depositario'];
    $motivo = $_POST['motivo'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];
    
    // SQL
    $sql = "INSERT INTO tb_deposito VALUES (null,'$valor', '$depositante','$depositario', '$motivo', '$data', '$horario')"; // Insere o usuário no banco
                         
    $conn -> query($sql); // Executando sql de cadastro de usuário no banco
        
        // Redirecionando para tela principal de usuário logado
        header("Location: ../principal/index.php");
?>