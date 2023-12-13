<?php
session_start();
include('../db/conexao.php');

// SQL para obter a média de gasolina por mês
$sqlGasolina = "SELECT mes ,ano, COALESCE(AVG(CASE WHEN motivo = 'Gasolina' THEN valor ELSE NULL END), 0) as media_gasolina FROM saque GROUP BY mes, ano";

$sqlAlmoco = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Almoco' THEN valor ELSE NULL END), 0) as media_almoco FROM saque GROUP BY mes, ano";

$sqlMaterialdecamposuporte = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Materialdecamposuporte' THEN valor ELSE NULL END), 0) as media_materialdecamposuporte FROM saque GROUP BY mes, ano";

$sqlPropaganda = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Propaganda' THEN valor ELSE NULL END), 0) as media_propaganda FROM saque GROUP BY mes, ano";

$sqlEscritorio = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Escritorio' THEN valor ELSE NULL END), 0) as media_escritorio FROM saque GROUP BY mes, ano";

$sqlVeiculos = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Veiculos' THEN valor ELSE NULL END), 0) as media_veiculos FROM saque GROUP BY mes, ano";

$sqlLimpeza = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Limpeza' THEN valor ELSE NULL END), 0) as media_limpeza FROM saque GROUP BY mes, ano";

$sqlTelefone = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Telefone' THEN valor ELSE NULL END), 0) as media_telefone FROM saque GROUP BY mes, ano";

$sqlAgua = "SELECT  mes, ano, COALESCE(AVG(CASE WHEN motivo = 'Agua' THEN valor ELSE NULL END), 0) as media_agua FROM saque GROUP BY mes, ano";

// Executando a consulta
$resultadoGasolina = $conn->query($sqlGasolina);

$resultadoAlmoco = $conn->query($sqlAlmoco);

$resultadoMaterialdecamposuporte = $conn->query($sqlMaterialdecamposuporte);

$resultadoPropaganda = $conn->query($sqlPropaganda);

$resultadoEscritorio = $conn->query($sqlEscritorio);

$resultadoVeiculos = $conn->query($sqlVeiculos);

$resultadoLimpeza = $conn->query($sqlLimpeza);

$resultadoTelefone = $conn->query($sqlTelefone);

$resultadoAgua = $conn->query($sqlAgua);
?>

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
                                <td>" . $linha['mes']. "</td>
                                <td>" . $linha['ano'] . "</td>
                            </tr>";
                    }
                }
                ?>
                
                </tbody>
            </table><br><br><br><br>


            <h2>Gasolina</h2>
        <table class="container">
            <thead>
                <tr class="font">
                    <th>Média</th>
                    <th>Mes</th>
                    <th>Ano</th>
                </tr>
            </thead>

            <tbody>
            <?php
                            // Exibindo os resultados da consulta de média de gasolina
                            while ($linhaGasolina = $resultadoGasolina->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . number_format($linhaGasolina['media_gasolina'], 0, ',', '.') . "</td>
                                        <td>" . $linhaGasolina['mes'] . "</td>
                                        <td>" . $linhaGasolina['ano'] . "</td>
                                      </tr>";
                            }
                            
                
                    ?>
    </tbody>
</table>   
<button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Gasolina</button><br>
<br><br><br>

<h2>Material De Campo (Suporte)</h2>
        <table class="container">
            <thead>
                <tr class="font">
                    <th>Média</th>
                    <th>Mes</th>
                    <th>Ano</th>
                </tr>
            </thead>

            <tbody>
            <?php
                            // Exibindo os resultados da consulta de média de material d campo
                            while ($linhaMaterialdecamposuporte = $resultadoMaterialdecamposuporte->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . number_format($linhaMaterialdecamposuporte['media_materialdecamposuporte'], 0, ',', '.') . "</td>
                                        <td>" . $linhaMaterialdecamposuporte['mes'] . "</td>
                                        <td>" . $linhaMaterialdecamposuporte['ano'] . "</td>
                                      </tr>";
                            }
                    ?>
    </tbody>
</table>   
<button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Material de Campo</button><br>
<br><br><br>


<h2>Almoço</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
            <?php
                    
                    // Exibindo os resultados da consulta de média de almoço
                    while ($linhaAlmoco = $resultadoAlmoco->fetch_assoc()) {
                        echo "<tr>
                                <td>" . number_format($linhaAlmoco['media_almoco'], 0, ',', '.') . "</td>
                                <td>" . $linhaAlmoco['mes'] . "</td>
                                <td>" . $linhaAlmoco['ano'] . "</td>
                              </tr>";
                    }
                    ?>
    </tbody>
            </table>
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Almoço</button><br>
            <br><br><br>

<h2>Propaganda</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
            <?php
                    
                    // Exibindo os resultados da consulta de média de almoço
                    while ($linhaPropaganda = $resultadoPropaganda->fetch_assoc()) {
                        echo "<tr>
                                <td>" . number_format($linhaPropaganda['media_propaganda'], 0, ',', '.') . "</td>
                                <td>" . $linhaPropaganda['mes'] . "</td>
                                <td>" . $linhaPropaganda['ano'] . "</td>
                              </tr>";
                    }
                    ?>
    </tbody>
            </table>
            
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Propaganda</button><br><br><br>


            
<h2>Agua</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
            <?php
                    
                    // Exibindo os resultados da consulta de média de almoço
                    while ($linhaAgua = $resultadoAgua->fetch_assoc()) {
                        echo "<tr>
                                <td>" . number_format($linhaAgua['media_agua'], 0, ',', '.') . "</td>
                                <td>" . $linhaAgua['mes'] . "</td>
                                <td>" . $linhaAgua['ano'] . "</td>
                              </tr>";
                    }
                    ?>
    </tbody>
            </table>
            
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Agua</button><br><br><br>

  
<h2>Escritorio</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
            <?php
                    
                    // Exibindo os resultados da consulta de média de almoço
                    while ($linhaEscritorio = $resultadoEscritorio->fetch_assoc()) {
                        echo "<tr>
                                <td>" . number_format($linhaEscritorio['media_escritorio'], 0, ',', '.') . "</td>
                                <td>" . $linhaEscritorio['mes'] . "</td>
                                <td>" . $linhaEscritorio['ano'] . "</td>
                              </tr>";
                    }
                    ?>
    </tbody>
            </table>
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Escritorio</button><br>
            <br><br><br>
        

            <h2>Veiculos</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
            <?php
                    
                    // Exibindo os resultados da consulta de média de almoço
                    while ($linhaVeiculos = $resultadoVeiculos ->fetch_assoc()) {
                        echo "<tr>
                                <td>" . number_format($linhaVeiculos ['media_veiculos'], 0, ',', '.') . "</td>
                                <td>" . $linhaVeiculos ['mes'] . "</td>
                                <td>" . $linhaVeiculos ['ano'] . "</td>
                              </tr>";
                    }
                    ?>
    </tbody>
            </table>
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Veiculos</button><br>
            <br><br><br>

            <h2>Limpeza</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
            <?php
                    
                    // Exibindo os resultados da consulta de média de almoço
                    while ($linhaLimpeza = $resultadoLimpeza ->fetch_assoc()) {
                        echo "<tr>
                                <td>" . number_format($linhaLimpeza ['media_limpeza'], 0, ',', '.') . "</td>
                                <td>" . $linhaLimpeza ['mes'] . "</td>
                                <td>" . $linhaLimpeza ['ano'] . "</td>
                              </tr>";
                    }
                    ?>
    </tbody>
            </table>
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Limpeza</button><br>
            <br><br><br>

            <h2>Telefone</h2>
            <table class="container">
                <thead>
                    <tr class="font">
                        <th>Média</th>
                        <th>Mes</th>
                        <th>Ano</th>
                    </tr>
                </thead>

                <tbody>
            <?php
                    
                    // Exibindo os resultados da consulta de média de almoço
                    while ($linhaTelefone = $resultadoTelefone ->fetch_assoc()) {
                        echo "<tr>
                                <td>" . number_format($linhaTelefone ['media_telefone'], 0, ',', '.') . "</td>
                                <td>" . $linhaTelefone ['mes'] . "</td>
                                <td>" . $linhaTelefone ['ano'] . "</td>
                              </tr>";
                    }
                    ?>
    </tbody>
            </table>
            <button class="mt-4 btn btn-outline-success" onclick="exibirMediaAlmocoNoConsole()">Calcular Média Telefone</button><br>
            <br>
            
            <button class="mt-4 btn btn-outline-primary"><a href="../principal/index.php" class="text-decoration-none">Voltar</a></button>
        </div><br><br>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <script>
    document.getElementById('mostrarDados').addEventListener('click', function () {
        var tabelaContainer = document.getElementById('tabelaContainer');
        tabelaContainer.style.display = (tabelaContainer.style.display === 'none') ? 'block' : 'none';
    });

</script>
 
</html>