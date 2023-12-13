<?php
    include('../db/conexao.php'); // Importando a conexão
    
    if (isset($_POST['submit'])){ 

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
        
        // Executando o sql no banco e colocando o resultado dessa execução na variável '$execucao_sql_usuario_dados' (EM FORMA DE TABELA)
     
        // Redirecionando para tela principal de usuário logado
        header("Location: ../principal/index.php");
    }
   
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>TUDOTELECOM|inicio</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/cadastro.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/cara-removebg-preview.png">
    <title>TUDOTELECOM | Movimento Financeiro</title>

<style>
          body {
            background-color: whitesmoke;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;  
            margin: 0;
        }

        .container {
            max-width: 300px;
            padding: 20px;
            margin-right: 100px;
            background-color: #fff;
            border-radius: 5px;
            z-index: -1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-image: linear-gradient(to right, rgb(0, 0, 0), rgb(72, 61, 139));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
        }

        button[type="submit"]:hover {
            background-color: gray;
        }

        .w3-top{
            background-color: #FFD700;
            color: black;
        }
        
        .body{
            background-image: url('../img/fundo_resized.png');
            display: flex;
            justify-content: center;
            background-position: center;
            width: 100%;
        }
         
    </style>

</head>


<body class="body">

<body style="background-color:whith; font-family: Minion Pro; color:#ffd700;">

    <div class="w3-top">
        <div class="w3-bar w3-padding w3-card w3-left">
            <a href="../principal/index.php" class="w3-bar-item w3-button w3-padding-large">VOLTAR</a>
            <a href="../caixa/total.php" class="w3-bar-item w3-button w3-padding-large">TOTAL:R$_____</a>
            <a class="w3-padding-large w3-hide-small w3-hover-black w3-right w3-button"><b>𝑪𝑨𝑰𝑿𝑨 𝑻𝑼𝑫𝑶𝑻𝑬𝑳𝑬𝑪𝑶𝑴
         </a>
        </div>
    </div><br><br><br>


    <form action="../caixa/inserir_entrada.php" method="POST" id="loin_form">

<div class="container">
        <h2>Deposito</h2>
        <form action="#" method="POST">
        <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" id="valor" name="valor" placeholder="000.00" step="any">
        </div>

            <div class="form-group">
                <label for="valor">Depositante:</label>
                <input type="text" id="valor" name="depositante" required><br>
            </div>
            
            <div class="form-group">
                <label for="valor">Depositario:</label>
                <select id="motivo1" name="depositario" required>
                        <option>Analine</option>
                        <option>Mayara</option>
                        <option>Samara</option>
                        <option>Outra</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data_movimentacao">Motivo:</label>
                <select id="motivo2" name="motivo" required>
                        <option>Taxa de ativação</option>
                        <option>Mensalidade</option>
                        <option>Deposito</option>
                        <option>Outro</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="data">Data:</label>
                <input type="text" id="data" name="data" readonly><br>
            </div>

            <div class="form-group">
                <label for="horario">Horário:</label>
                <input type="text" id="horario" name="horario" required><br>
            </div>

            <button type="submit">Enviar</button>

<script>
  // Preencha automaticamente os campos de data e horário com a data e hora atuais
  const dataAtual = new Date();

  const dataInput = document.getElementById("data");
  const dia = dataAtual.getDate();
  const mes = dataAtual.getMonth() + 1; // Adicione +1 porque os meses são base 0
  const ano = dataAtual.getFullYear();

  // Formate a data como "DD/MM/YYYY"
  const dataFormatada = `${dia}/${mes}/${ano}`;

  dataInput.value = dataFormatada;

  const horarioInput = document.getElementById("horario");
  const horarioFormatado = dataAtual.toTimeString().split(' ')[0];
  horarioInput.value = horarioFormatado;
</script>

</body>
</html>