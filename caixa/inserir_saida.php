<?php
    include('../db/conexao.php'); // Importando a conexão
    
    // Pegando o digitado nos inputs
    $valor = $_POST['valor'];
    $depositante = $_POST['depositante'];
    $depositario = $_POST['depositario'];
    $motivo = $_POST['motivo'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    $horario = $_POST['horario'];
    
    // SQL
    $sql = "INSERT INTO saque VALUES (null,'$valor', '$depositante','$depositario', '$motivo', '$dia', '$mes', '$ano', '$horario')"; // Insere o usuário no banco
                         
    $conn -> query($sql); // Executando sql de cadastro de usuário no banco
        
        // Executando o sql no banco e colocando o resultado dessa execução na variável '$execucao_sql_usuario_dados' (EM FORMA DE TABELA)
     
    header("Location: ../principal/index.php"); // Redirecionando para tela principal de usuário logado
    
?>