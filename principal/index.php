<?php
session_start();
// Verifique se o nome está na sessão
if (isset($_SESSION["nome"])) {
    $nome = $_SESSION["nome"];
} else {
    $nome = "Nome não encontrado";
}

// $_SESSION['email'] != ""
if (!isset($_SESSION['email'])) { // Verifica se o usuário está logado
    header('Location: index.principal.php'); // Redirecionando para a tela de usuário NÃO logado
} else {
    include('../db/conexao.php'); // Importando a conexão

    $id_usuario = $_SESSION['id_usuario']; // Pegando o valor da variável global de tipo SESSION e colocando em uma variável local

    $sql_usuario_dados = "SELECT * FROM tb_usuario WHERE id_usuario = '$id_usuario'";

    // Requisitando os dados do usuário 
    $result = mysqli_query($conn, $sql_usuario_dados); // Execução do sql no banco e colocando-os na variável 'result' (EM FORMA DE TABELA)

    $dados_usuario = mysqli_fetch_assoc($result); // Percorrendo os dados do usuário e colocando-os em uma variável (dados_usuario) (EM FORMA DE ARRAY)

    // Salvando os dados do usuário na sessão e em variáveis locais
    $id_usuario = $_SESSION['id_usuario'] = $dados_usuario['id_usuario'];
    $nome = $_SESSION['nome'] = $dados_usuario['nome'];
    $email = $_SESSION['email'] = $dados_usuario['email'];
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css"> <!-- Create a separate CSS file for your styles -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/cara-removebg-preview.png">

    <style>
        /* Add your custom styles here */
        body {
            background-color: whitesmoke;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .w3-top {
            background-color: #FFD700;
            color: black;
            height: 75px;
        }

        .fundo {
            height: 100vh; /* 100% of the viewport height */
            width: 100%;
            position: relative;
            overflow-x: hidden;
        }

        .config {
            z-index: 5;
        }
        
    </style>

</head>


<body class="cop">

<body style="background-color:whith; font-family: Minion Pro; color:#ffd700;">
    <img class="fundo" src="../img/BEM VINDA(O).png" alt="fundo">

    <div class="w3-top">
        <div class="w3-bar w3-padding">
            <a href="../login/sair.php" class="w3-bar-item w3-button w3-padding-large">SAIR</a>
            <a href="../atualizacao/atua.php" class="w3-bar-item w3-button w3-padding-large">ATUALIZAR</a>
  
            <?php
            // Verifica se o email atual é de admin
            if ($email == "mayara@admin.com") {
                echo "
                <div class='w3-dropdown-hover w3-hide-small'>
                <button class='w3-padding-large w3-button' title='More'>CAIXA<i class='fa fa-caret-down'></i></button>
                <div class='w3-dropdown-content w3-bar-block w3-card-4'>
                    <a href='../caixa/entrada.php' class='w3-bar-item w3-button'>Entrada</a>
                    <a href='../caixa/saida.php' class='w3-bar-item w3-button'>Saida</a>
                    <a href='../caixa/total.php' class='w3-bar-item w3-button'>Total</a>
                </div>
            </div>
            	    ";
            }
            ?>

            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">TABELAS<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="../tabelas/entrada.php" class="w3-bar-item w3-button">Entrada</a>
                    <a href="../tabelas/saida.php" class="w3-bar-item w3-button">Saida</a>
                    <a href="../tabelas/medias.php" class="w3-bar-item w3-button">Medias</a>
                    <a href="../tabelas/total.php" class="w3-bar-item w3-button">Total</a>
                </div>
            </div>
	
            <a class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hide-small" style="margin-left: 60%;"><?php echo "Olá <strong>" . $nome . "</strong>!"?>
         </a>

        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofP+Neo4v8x0txcAL5Z+DpL/F5Z9xgEIl6" crossorigin="anonymous"></script>
</body>

</html>