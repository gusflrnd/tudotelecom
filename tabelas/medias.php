<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TUDOTELECOM | Listagem de Entradas </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://mir-s3-cdn-cf.behance.net/project_modules/1400/b8fa3b36209187.5713e53e33d6c.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Comfortaa:wght@300;700&family=Didact+Gothic&family=Fredoka+One&family=Open+Sans:wght@300&family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/cara-removebg-preview.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/cara-removebg-preview.png">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: Comfortaa, sans-serif;
            border: none;
            text-decoration: none;
            transition: .3s;
        }

        tr,
        th,
        td {
        	text-align: center;
            border: 1px solid #fff;
            padding: 5px;
        }

        th,
        td:hover {
            background-color: rgba(255,215,09);
        }

       .loo{
            width: 35%;
            margin-left: 36%;
       }

       #mostrarDados{
        margin-left: 85px;
       }

       
       body{
        background-color: #000000;
        }
         
        td{
            color:white;
            width:5px;
        }
       
        h3{
            color:white;
        }

        h2{
            color:white;
        }

        .box-search{
            margin-left: 490px;
        }
    </style>
</head>

<body class="fund"><br><br>
    <div class="container mx-auto">
    <img src="../img/logo2.png" class="loo">
        <h3 class="d-flex justify-content-center mb-3">Medias</h3>

<div class="box-search">
    <button class="mt-4 btn btn-outline-warning" id="mostrarDados">Mostrar Dados</button>
</div>

<br><br>

<div id="tabelaContainer" style="display: none;">
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>ID_Media<span class='fw-semibold'>(Media)</span></th>
                        <th>Valor</th>
                        <th>Motivo</th>
                        <th>Dia</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                session_start();

                if (isset($_SESSION)) {
                    include('../db/conexao.php');
                    $sql = "SELECT * from saque";
                    $dados = mysqli_query($conn, $sql);

                    while ($linha = mysqli_fetch_assoc($dados)) {
                      
                        echo "<tr>
                                <td>" . $linha['id_saque'] . "</td>
                                <td>" . $linha['valor'] . "</td>
                                <td>" . $linha['motivo'] . "</td>
                                <td>" . $linha['dia'] . "</td>
                                <td>" . $mes . "</td>
                                <td>" . $linha['ano'] . "</td>
                            </tr>";
                    }
                }
                ?>
                
                </tbody>
            </table>
            <br><br><br><br>


            <h2>ALMOÇO</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                    </tr>
                </thead>
            </table>
            <br><br><br>


            <h2>GASOLINA</h2>
        <table class="container">
            <thead>
                <tr class="font">
                    <th>Média</th>
                    <th>Mes</th>
                </tr>
            </thead>
</table>

                    
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Almoço</button>
            <button class="mt-4 btn btn-outline-primary"><a href="../principal/index.php" class="text-decoration-none">Voltar</a></button>
        </div><br><br>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <script>
    document.getElementById('mostrarDados').addEventListener('click', function () {
        var tabelaContainer = document.getElementById('tabelaContainer');
        tabelaContainer.style.display = (tabelaContainer.style.display === 'none') ? 'block' : 'none';
    });

</script>
 
</html>