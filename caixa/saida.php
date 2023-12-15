<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>TUDOTELECOM|saida</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/cadastro.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/cara-removebg-preview.png">
    <title>TUDOTELECOM | Movimento Financeiro</title>

<style>

body {
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
            margin-right: 50px;
            background-color: #fff;
            border-radius: 5px;
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
            color:black;
        }

        .fundo{
            padding-top: 250px;
            margin-left: 260px;
            z-index: -1;
        }

        .body{
            background-image: url('../img/fundo_resized.png');
            display: flex;
            justify-content: center;
            background-position: center;
            width: 100%;
        }
     
        .tudoall{
            width: 180px;
            margin-left: 1250px;  
            margin-top:-55px;
        }
    </style>

</head>

<body class="body">

<body style="background-color:whith; font-family: Minion Pro; color:#ffd700;">

    <div class="w3-top">
        <div class="w3-bar w3-padding w3-card w3-left">
            <a href="../principal/index.php" class="w3-bar-item w3-button w3-padding-large">VOLTAR</a>
            <a href="../caixa/total.php" class="w3-bar-item w3-button w3-padding-large">TOTAL</a>
         </a>
         <img src="../img/logoprinc.png" class="tudoall"></a> 
    </div>
    </div><br><br><br><br><br><br><br><br>


    <form action="../caixa/inserir_saida.php" method="POST" id="loin_form"><br><br><br><br><br><br><br><br><br><br><br>
   
  <div class="container" style="color:black">
    <h2 style="text-align: center; font-family: Georgia, serif">SAQUE</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" placeholder="000.00" step="any">
      </div>

      <div class="form-group">
        <label for="depositante">Quem deu?</label>
        <input type="text" id="depositante" name="depositante" required><br>
      </div>

      <div class="form-group">
        <label for="depositario">Quem recebeu?</label>
        <select id="depositario" name="depositario" required>
          <option>Analine</option>
          <option>Mayara</option>
          <option>Samara</option>
          <option>Outra</option>
        </select>
      </div>

      <div class="form-group">
        <label for="motivo">Motivo:</label>
        <select id="motivo" name="motivo" required>
          <option>Gasolina</option>
          <option>Tarquilio</option>
          <option>Materialdecamposuporte</option>
          <option>Almoco</option>
          <option>Propaganda</option>
          <option>Agua</option>
          <option>Escritorio</option>
          <option>Veiculos</option>
          <option>Limpeza</option>
          <option>Telefone</option>
          <option>Outro</option>
        </select>
      </div>

      <div class="form-group">
        <label for="dia">Dia:</label>
        <input type="number" id="dia" name="dia" required><br>
      </div>

      <div class="form-group">
        <label for="mes">Mês:</label>
        <input type="number" id="mes" name="mes" required><br>
      </div>

      <div class="form-group">
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" required><br>
      </div>

      <div class="form-group">
        <label for="horario">Horário:</label>
        <input type="text" id="horario" name="horario" required><br>
      </div>

      <button type="submit">Enviar</button>
    
  </div>
</form>

<script>
  // Preencha automaticamente os campos de dia, mês, ano e horário com a data e hora atuais
  const dataAtual = new Date();

  const diaInput = document.getElementById("dia");
  diaInput.value = dataAtual.getDate();

  const mesInput = document.getElementById("mes");
  mesInput.value = dataAtual.getMonth() + 1; // Adicione +1 porque os meses são base 0

  const anoInput = document.getElementById("ano");
  anoInput.value = dataAtual.getFullYear();

  const horarioInput = document.getElementById("horario");
  const horarioFormatado = dataAtual.toTimeString().split(' ')[0];
  horarioInput.value = horarioFormatado;

</script>
    </div>
</body>        