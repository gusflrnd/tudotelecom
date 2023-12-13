<?php
session_start(); // Inicia a sessão

if (isset($_POST['submit'])) { // Verifica se o botão foi clicado
    header('Location: ../principal/index.php');
    // Validação de inputs
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["nome"])) {
            // Sanitize and validate the input, if needed
            $nome = $_POST["email"];
    
            // Store the name in the session
            $_SESSION["nome"] = $nome;
    
            // Redirect to another page
            header("Location: ../principal/index.php");
            exit;
        } else {
            // Handle the case where 'nome' is not set in the form
            echo "Campo 'nome' não encontrado no formulário.";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>TUDOTELECOM|loin</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="apple-touch-icon" sizes="180x180" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/cara-removebg-preview.png">

</head>

<style>
    :root {
        --color-ligth-50: #f8fafc;

        --color-dark-50: #797984;
        --color-dark-100: #312d37;
        --color-dark-900: #000;

        --color-purple-50: #7c3aed;
        --color-purple-100: #a855f7;
        --color-purple-200: #bf46ef;

        --color-gradient: linear-gradient(90deg, var(--color-purple-50));
    }

    * {
        font-family: 'poppis', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #conteiner {
        height: 90vh;
        margin-right:350px;
        width: 1%;
        background: var(--color-gradient);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #loin_form {
        background-color: var(--color-ligth-50);
        display: flex;
        flex-direction: column;
        padding: 30px 40px;
        border-radius: 8px;
        gap: 30px;
        box-shadow: 5px 5px 8px rba(0, 0, 0, 0.336);
        height: fit-content;
    }

    
#social_midia{
    display: flex;
    justify-content: space-around;
    display:flex;
    align-items: center;
    justify-content: space-between;
}



#social_midia h1{
    font-size: 40px;
    position: relative;


}

#social_midia h1::before{
    position: absolute;
    content: '';
    width: 40px;
    background-color: var(--color-yellow-200);
    height: 3px;
    bottom: 10px;
    border-radius: 5px;
}

#social_midia img{
    width:75px;
}

    #mode_icon {
        cursor: pointer;
        font-size: 20px;
    }

    #inputs {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .input-box label {
        font-size: 14px;
        color: var(--color-dark-50);
    }

    .input-field {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 3px;
        cursor: text;
        border-bottom: 1px solid var(--color-purple-50);

    }

    .input-field i {
        font-size: 18px;
        color: var(--color-dark-900);
    }


    .input-field input {
        border: none;
        background-color: transparent;
        width: 260px;
        font-size: 18px;
        padding: 0px 5px;
    }

    .input-field input:focus {
        outline: none;
    }
    
    #forgot_senha a{
    text-decoration: none;
    font-size: 12px;
    color: var(--color-dark-50);
}


#forgot_senha a:hover{
color: var(--color-yellow-gradient);
}
    #login_button {
        background-image: linear-gradient(to right, rgb(0, 0, 0), rgb(72, 61, 139));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    #login_button:hover {
        transform: scale(1.05);
    }

    #login_button:hover {
        transform: scale(1.05);
    }

    #form_header h1::before {
        position: absolute;
        content: '';
        width: 40%;
        background-color: var(--color-black-50);
        height: 3px;
        bottom: 10px;
        border-radius: 5px;
    }

    .w3-top{
            background-color: #FFD700;
            color:black;
        }

        .body{
            background-image: url('../img/fundo_resized.png');
            display: flex;
            justify-content: center;
            background-position: center;
            width: 100%;
        }    
</style>

<body class="body">

    <body style="background-color:whith; font-family: Minion Pro; color:black;">
        <img class="w3-image" src="" alt="Architecture" width="100%" height="2500px">

        <div class="w3-top">
            <div class="w3-bar w3-padding w3-card w3-left">
                <a href="../principal/index.Principal.php"
                    class="w3-bar-item w3-button w3-padding-large w3-text-align:center">𝑉𝑂𝐿𝑇𝐴𝑅</a>
                <a class="w3-padding-large w3-hide-small w3-hover-black w3-right w3-button"><b>𝑪𝑨𝑰𝑿𝑨
                        𝑻𝑼𝑫𝑶𝑻𝑬𝑳𝑬𝑪𝑶𝑴
                        <h2 class="text-align:center">𝐂𝐀𝐃𝐀𝐒𝐓𝐑𝐎</h2>
                </a>
            </div>
        </div><br><br><br><br><br>


        <main id="conteiner">
            <form action="../cadastro/index.php" method="POST" id="loin_form">
            <div id="social_midia">
                    <h1>𝐂𝐀𝐃𝐀𝐒𝐓𝐑𝐎<h1>
                    <a href="#">
<img src="../img/WhatsApp_Image_2023-10-07_at_09.34.18-removebg-preview.png"alt="">
</a>
                </div>

                <div id="inputs">
                    <div class="input-box">
                        <label for="name">
                            Name
                            <div class="input-field">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" id="name" placeholder="ɪɴsɪʀᴀ sᴇᴜ ɴᴏᴍᴇ" name="nome" required>
                            </div>
                        </label>
                    </div>

                    <div class="input-box">
                        <label for="email">
                            Email
                            <div class="input-field">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" id="email" placeholder="ɪɴsɪʀᴀ sᴇᴜ ᴇ-ᴍᴀɪʟ " name="email">
                            </div>
                        </label>
                    </div>

                    <div class="input-box">
                        <label for="senha">
                            Senha
                            <div class="input-field">
                                <i class="fa-solid fa-key"></i>
                                <input type="password" id="senha" placeholder="ɪɴsɪʀᴀ sᴜᴀ sᴇɴʜᴀ" name="senha">
                            </div>
                        </label>
                    </div>


                    <div id="forgot_senha">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                </div>

                <button type="submit" name="submit" id="login_button">ᴄᴀᴅᴀsᴛʀᴀʀ</button>

        </main>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
    </body>

</html>