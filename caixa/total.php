<?php
  session_start(); // Inicia a sessão
  
  if (isset($_POST['submit'])) { // Verifica se o botão foi clicado
      try {
          // Conexão com o banco de dados (substitua pelas suas configurações)
          $db = new PDO('mysql:host=localhost;dbname=caixa_td_telecom', 'root', '');
  
          // Calcula o valor total dos depósitos
          $stmtDepositos = $db->query('SELECT COALESCE(SUM(valor), 0) FROM tb_deposito');
          $totalDepositos = $stmtDepositos->fetchColumn();
  
          // Calcula o valor total dos saques
          $stmtSaques = $db->query('SELECT COALESCE(SUM(valor), 0) FROM saque');
          $totalSaques = $stmtSaques->fetchColumn();
  
          // Obtém o valor inicial do saldo
         $stmtSaldo = $db->query('SELECT valor_final FROM saldo ORDER BY data DESC LIMIT 1');
         $valorFinal = $stmtSaldo->fetchColumn();

         // Configura o valor inicial igual ao valor final repassado pelo usuário
         $valorInicial = $valorFinal;

         // Calcula o valor final
         $resultado = $valorFinal + $totalDepositos - $totalSaques;

         // Formata o valor final com dezenas, decimais e centenas
         $valorFormatado = number_format($resultado, 2, ',', '.');

      } catch (PDOException $e) {
          echo "Erro: " . $e->getMessage();
      }
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

        .container1 {  
            padding: 50px;
            margin-right:650px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container2 {
            margin-right:500px;
            align-items: center;
            padding: 50px;
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

        .button[type="submit"] {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .button[type="submit"]:hover {
            background-color: gray;
        }

     /* Estilo para o botão olho */
     .eye-button {
      background-color: transparent;
      border: none;
      cursor: pointer;
    }
    .eye-icon {
      width: 25px;
      height: 25px;
      margin-top: 9px;
      margin-left: 5px;
    }

    /* Estilo para o texto a ser mostrado/oculto */
    .hidden-text {
      display: none;
      margin-right: 10px;
    }

    .w3-top{
            background-color: #FFD700;
            color:black;
        }

        body, html {
    height: 100%;
    margin: 0;
    overflow: hidden;
}

.hidden {
    display: none;
}

.spinner-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Fundo escurecido */
    display: flex;
    justify-content: center;
    align-items: center;
}

.spinner {
    border: 12px solid rgba(255, 255, 255, 0.3);
    border-top: 12px solid yellow;
    border-radius: 50%;
    width: 200px;
    height: 200px;
    animation: spin 2s linear infinite;
}

.large {
    width: 300px;
    height: 300px;
}

.yellow {
    border-top: 12px solid yellow;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
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
    <img class="w3-image" width="100%" height="2500px">

    <div class="w3-top">
        <div class="w3-bar w3-padding w3-card w3-left">
            <a href="../principal/index.php" class="w3-bar-item w3-button w3-padding-large">VOLTAR</a>
            <button id="eyeButton" class="eye-button">
                <img id="eyeIcon" class="eye-icon" src="../img/olho.png" alt="Mostrar texto">
            </button>
            <a class="w3-bar-item w3-button w3-padding-large">𝑀𝐸𝑈 𝑆𝐴𝐿𝐷𝑂 𝐷𝐼𝑆𝑃𝑂𝑁𝐼́𝑉𝐸𝐿:</a>
    
            <p id="textToToggle" class="hidden-text" type="submit" name="submit">
                <?php echo "R$ $valorFormatado"; ?>
            </p>
        </div>
    </div>

    <div class="container1" style="color:black">
        <h2>TOTAL</h2>
        <form method="post" action="">
            <button id="startButton" class="button"  name="submit"  type="submit">Calcular Saldo</button>
        </form><br>

        <h2>SALDO</h2>

    
        <form action="../caixa/inserir_total2.php" method="POST" style="color:black">

      <!-- Dentro do seu formulário -->
      <label for="valor_inicial">Valor Inicial:</label>
      <input type="text" id="valor_inicial" name="valor_inicial" value="<?php echo isset($valorInicial) ? $valorInicial : ''; ?>"><br><br>

        <label for="valor_final">Valor Final:</label>
        <input type="text" id="valor_final" name="valor_final"><br><br>
        
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" required><br><br>

      <button type="submit" class="button" name="submit" onclick="calcularValorFinalEData()">Calcular Valores</button>
        
    </div>
    </div>
        </form>

<br><br><br><br><br><br>

        <div id="spinnerContainer" class="hidden">
        <div class="spinner-container">
            <div class="spinner yellow large"></div>
        </div>
        
        
<script>
  const eyeButton = document.getElementById('eyeButton');
  const eyeIcon = document.getElementById('eyeIcon');
  const textToToggle = document.getElementById('textToToggle');
  let isHidden = true;

  eyeButton.addEventListener('click', function() {
    if (isHidden) {
      textToToggle.style.display = 'block'; // Mostra o texto
      eyeIcon.src = '../img/eye-outline-drawing-on-transparent-background-free-png.webp'; // Altera o ícone para "olho aberto"
    } else {
      textToToggle.style.display = 'none'; // Oculta o texto
      eyeIcon.src = '../img/olho.png'; // Altera o ícone para "olho fechado"
    }
    isHidden = !isHidden;
  });
  
const startButton = document.getElementById('startButton');
const spinnerContainer = document.getElementById('spinnerContainer');

startButton.addEventListener('click', () => {
    // Quando o botão é clicado, exibe o spinner
    spinnerContainer.classList.remove('hidden');

    // Define um temporizador para esconder o spinner e a tela de fundo escurecida após 8 segundos
    setTimeout(() => {
        spinnerContainer.classList.add('hidden');
    }, 8000);
});

const dataInput = document.getElementById("data");

    const dataAtual = new Date();
    const dataFormatada = dataAtual.toISOString().split('T')[0];
    const horarioFormatado = dataAtual.toTimeString().split(' ')[0];

    dataInput.value = dataFormatada;
 
</script>
</body>
</html>