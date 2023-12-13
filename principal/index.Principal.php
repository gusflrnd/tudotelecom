<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>TUDOTELECOM | inicio</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/cadastro.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/cara-removebg-preview.png">
    <link rel="manifest" href="/site.webmanifest">

    <style>
        body {
            background-color: whitesmoke;
            position: relative;  
            overflow-x: hidden;
        }

        .carousel-inner {
            z-index: -1;
            height: 750px;
        }


        footer {
            background-color: gray;
            color: yellow;
            text-align: center;
            padding: 20px;
        }

        .logo {
            margin-left: 20px;

        }

        .btn {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;

        }

        .botao-contato {
            display: inline-block;
            padding: 12px 12px;
            background-color: #4F4F4F;
            /* Cor de fundo cinza */
            color: #fff;
            /* Cor do texto branco */
            text-decoration: none;
            /* Remove sublinhado padrão de links */
            border-radius: 5px;
            /* Borda arredondada */
            transition: background-color 0.2s ease;
            /* Efeito de transição de cor ao passar o mouse */
        }

        .botao-contato:hover {
            background-color: #999;
            /* Cor de fundo cinza mais escura quando o mouse passa por cima */
            transform: scale(1.2);
            /* Move o retângulo para a direita quando o mouse passa por cima */
        }


        .caixa {
            width: 850px;
            /* Aumentamos a largura para 150px */
            height: 190px;
            margin-left: 50px;
            background-color: white;
            transition: background-color 0.3s ease;
            border-radius: 6px;
        }

        #caixa1:hover {
            background-color: gray;

        }

        .font {
            color: black;
            margin-left: 20px;
            margin-top: 10px;
        }

        .img {
            width: 80px;
            margin-top: 10px;
            margin-left: 2px;
        }

        .retangulo {
            width: 100%;
            margin-left: 90px;
        }

        .tudoall{
            width: 180px;
            margin-left: 1250px;  
            margin-top:-55px; 
            
        }

        .w3-top{
            background-color: #FFD700;
            color:black;
        }

    </style>
</head>

<body style="background-color:whith; font-family: Minion Pro; color:#ffd700;">
   
    <div class="w3-top">
        <div class="w3-bar w3-padding w3-card w3-left">
            <a href="../login/index.login.php" class="w3-bar-item w3-button w3-padding-large">LOGAR</a>
            <a href="../cadastro/index.cadastro.php" class="w3-bar-item w3-button w3-padding-large">CADASTRO</a>
            <a href="#sobre" class="w3-bar-item w3-button w3-padding-large">SOBRE</a>
            <a href="#fale" class="w3-bar-item w3-button w3-padding-large">FALE CONOSCO</a>

            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">CIDADE<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="https://www.google.com/maps/place/Tudo+All+Telecom/@-3.4406496,-39.1510786,17z/data=!4m14!1m7!3m6!1s0x7c0e3b4db4b3c4f:0x725addb00b87e147!2sTudo+All+Telecom!8m2!3d-3.4406496!4d-39.1484983!16s%2Fg%2F11l392rtzp!3m5!1s0x7c0e3b4db4b3c4f:0x725addb00b87e147!8m2!3d-3.4406496!4d-39.1484983!16s%2Fg%2F11l392rtzp?entry=ttu" class="w3-bar-item w3-button">Paraipaba</a>     
                </div>      
            </div>

        <img src="../img/Tudo-Telecom-Logo.png" class="tudoall"></a>    
        </div>
    </div>
    <br><br>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/CAIXA.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/MÉDIAS DE LUCRO.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/CAIXA (1).png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div><br><br><br>



    <div class="retangulo" id="sobre">
        <img src="../img/Nosso objetivo de movimentos do CAIXA TUDOTELECOM possui duas funções específicas registrar todas as retiradas dos caixa(reembolso), as entradas e reposição (saldo). O sistema trabalha com dois co.png"><br>
    </div>
    <br><br><br><br><br>

    <div class="caixa" id="caixa1">
        <div class="font">
            <img src="../img/243942-removebg-preview.png" class="img" alt="...">
            <h2>Controle Financeiro</h2>
            <p>Tenha um controle financeiro para a saude do seu negocio</p>
        </div>
    </div>
    <br><br>

    <div class="caixa" id="caixa1">
        <div class="font">
            <img src="../img/icone-de-l-argent-symbole-png-jaune-removebg-preview.png" class="img" alt="...">
            <h2>Controle de Estoque</h2>
            <p>Organize seu estoque de mercadorias, supervisionando as entradas e saídas de forma impecável.</p>
        </div>
    </div><br><br>

    <div class="caixa" id="caixa1">
        <div class="font">
            <img src="../img/symbole-de-la-calculatrice-jaune-removebg-preview.png" class="img" alt="...">
            <h2>Controle de Despesas</h2>
            <p>Calcule o lucro ou despesas da sua empresa </p>
        </div>
    </div>

    <br><br><br><br><br><br>
    <div class="bnt">
        <div class="container">
            <h1 style="color:black; font-family: Minion Pro;" id="fale">𝗖𝗼𝗺𝗼 𝗽𝗼𝘀𝘀𝗼 𝗮𝗷𝘂𝗱𝗮𝗿?</h1>
            <a href="https://wa.me/5585992556994" class="botao-contato">ENTRE EM CONTATO E FALE CONOSCO</a>
        </div>
    </div><br><br><br>

    <footer>
        <div class="w3-row-padding">
            <div class="logo">
                <img src="../img/Tudo-Telecom-Logo.png">
            </div>

            <div class="w3-third">
                <h2>Por:</h2>
                <p> Alice Florindo <br>Paulo Henrrique
                    <br>Marcos Kauan
                </p>
            </div>

            <div class="w3-third">
                <h2 id="contato";>Codificação</h2>
                <ul class="w3-ul w3-hoverable">
                    <li class="w3-padding-16">
                        <span class="w3-large">Front-end</span><br>
                        <span>Alice Florindo</span>
                    </li>
                    <li class="w3-padding-16">
                        <span class="w3-large">Back-end</span><br>
                        <span>Alice, Paulo, Kauan</span>
                    </li>
                    <li class="w3-padding-16">
                        <span class="w3-large">Documentação</span><br>
                        <span>Paulo, Kauan</span>
                    </li>
                </ul>
            </div>

            <div class="w3-third">
                <h2>Contato</h2>
                <p>
                    (85)99255-6994 <br> (85)99696-1466
                    <br> (85)99942-9781
                </p>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>