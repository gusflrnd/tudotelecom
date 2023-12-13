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
   $sql = "SELECT mes, COALESCE(AVG(CASE WHEN motivo = 'Gasolina' THEN valor ELSE NULL END), 0) as media_gasolina FROM saque GROUP BY mes";
                        
   $conn -> query($sql); // Executando sql de cadastro de usuário no banco
       
       // Redirecionando para tela principal de usuário logado
       header("Location: ../principal/index.php");
?>


