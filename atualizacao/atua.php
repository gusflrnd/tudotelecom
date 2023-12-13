<?php
session_start();
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

         /* Adicione este CSS para posicionar o ícone do olho à esquerda */
         .input-field {
            position: relative;
        }

        #togglePassword {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 18px;
            color: var(--color-dark-900);
        }

        .body{
            background-image: url('../img/cadlog2.png');
            display: flex;
            height: 775px;
            justify-content: center;
            background-position: center;
            width: 100%;
        }    
    </style>
        </style>
</head>

<body class="body">

<body style="background-color:whith; font-family: Minion Pro; color:black;">
        <img class="w3-image" src="" alt="Architecture" width="100%" height="2500px">

        <div class="w3-top">
            <div class="w3-bar w3-padding w3-card w3-left">
                <a href="../principal/index.php"
                    class="w3-bar-item w3-button w3-padding-large w3-text-align:center">𝑉𝑂𝐿𝑇𝐴𝑅</a>
                <a class="w3-padding-large w3-hide-small w3-hover-black w3-right w3-button"><b>𝑪𝑨𝑰𝑿𝑨
                        𝑻𝑼𝑫𝑶𝑻𝑬𝑳𝑬𝑪𝑶𝑴
                        <h2 class="text-align:center">𝐀𝐓𝐔𝐀𝐋𝐈𝐙𝐀𝐂̧𝐀𝐎</h2>
                </a>
            </div>
        </div><br><br><br><br>


        <main id="conteiner">
            <form action="../cadastro/index.php" method="POST" id="loin_form">
            <div id="social_midia">
                    <h1>𝐀𝐓𝐔𝐀𝐋𝐈𝐙𝐀𝐂̧𝐀𝐎<h1>
                    <a href="#">
<img src="../img/WhatsApp_Image_2023-10-07_at_09.34.18-removebg-preview.png"alt="">
</a>
                </div>

               
<form action="../atualizacao/index.php" method="POST">

    <?php
    include_once("../db/conexao.php"); // Importa a conexão 

    $mat = $_SESSION["id_usuario"];

    $sql = "SELECT * from tb_usuario where id_usuario = '$mat'";

    $result = mysqli_query($conn, $sql);

    if($result){ // fetch percorre obj
        if ($obj = $result->fetch_object()) {
            echo "
            <div id='inputs'>
            <div class='input-box'>
                <label for='name'>
                    Name
                    <div class='input-field'>
                        <i class='fa-solid fa-user'></i>
                        <input type='text' id='name' placeholder='ɪɴsɪʀᴀ sᴇᴜ ɴᴏᴍᴇ' name='nome' value='" . $obj->nome . "'/>
                    </div>
                </label>
            </div><br>

            <div class='input-box'>
            <label for='email'>
                 Email
               <div class='input-field'>
                    <i class='fa-solid fa-envelope'></i>
                    <input type='email' id='email'  placeholder='ɪɴsɪʀᴀ sᴇᴜ ᴇ-ᴍᴀɪʟ' name='email'  value='" . $obj->email . "'/>
               </div>
            </label>
       </div><br>

       <div class='input-box'>
       <label for='senha'>
           Senha
           <div class='input-field'>
               <i class='fa-solid fa-key'></i>
               <input type='password' id='senha' placeholder='ɪɴsɪʀᴀ sᴜᴀ sᴇɴʜᴀ' name='senha' value='" . $obj->senha . "' required />
               <i id='togglePassword' class='fa-solid fa-eye-slash'></i>
           </div>
       </label>
   </div>";

        }}

    mysqli_close($conn);

    ?><br>
     
  <button type="submit" name="submit" id="login_button">ᴀᴛᴜᴀʟɪᴢᴀʀ</button>

</main> 
</form>
</html> 

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('senha');

    togglePassword.addEventListener('click', function() {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');
        }
    });
});
  </script>
</body>           