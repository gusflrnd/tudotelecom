
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TUDOTELECOM | Listagem de entradas </title>
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

       .font{
        color: black;
       }

       .box-search{
            display: flex;
            justify-content: center;
            gap: .1%; 
            width: 600px;
            margin-left: 260px;
       }

       .loo{
            width: 35%;
            margin-left: 36%;
       }

       #mostrarDados{
        margin-left: 95px;
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
    </style>
</head>



<body class="fund"><br>
    <div class="container mx-auto">
        <img src="../img/logo2.png" class="loo">
        <h3 class="d-flex justify-content-center mb-3">Movimentaçoes</h3><br>

        <div class="box-search">
    <button class="mt-4 btn btn-outline-warning" id="mostrarDados">Mostrar Dados</button>
</div><br><br>

<div id="tabelaContainer" style="display: none;">
    <table class="container">
        <thead>
            <tr class="font">
                <th>ID_Saldo</th>
                <th>Periodo</th>
                <th>Valor Inicial</th>
                <th>Valor Final</th>
                <th>Resultado</th>
                <th>Excluir</th> 
                <th>Estado</th> 
            </tr>
        </thead>

        <tbody>
            <?php
                session_start();
                $somaDespesa = 0;
                $somaLucro = 0;
                
                if (isset($_SESSION)) {
                    include('../db/conexao.php');
                                        
                        $sql = "SELECT * from saldo";
                        $dados = mysqli_query($conn, $sql);

                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $valor_inicial = $linha['valor_inicial'];
                            $valor_final = $linha['valor_final'];
                            $resultado = $valor_final - $valor_inicial;
                    
                            
                            echo "<tr>
                                    <td>" . $linha['id_saldo'] . "</td>
                                    <td>" . $linha['data'] . "</td>
                                    <td>" . $valor_inicial . "</td>
                                    <td>" . $valor_final . "</td>
                                    <td>" . $resultado . "</td>
                                    <td>
                                
                                    <a class='btn btn-sm btn-danger' href='../acaoADM/deletar.media.php?id_saldo=" . $linha['id_saldo'] . "'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'>
                                    </svg>
                                </a>
                            </td>
                            <td>";

                            
                            if ($resultado > 0) {
                                echo "Seu estado é de LUCRO";
                                $somaLucro += $resultado; // Adiciona à soma se for lucro
                            } else if ($resultado < 0){
                                echo "Seu estado é de DESPESA";
                                $somaDespesa += abs($resultado); // Adiciona à soma se for despesa
                            } else {
                                echo "Resultado zero";
                            }
                            echo "</td>
                                </tr>";
                            }

if ($somaLucro > $somaDespesa) {
    echo "<script>alert('Parabéns! O periodo foi muito bom para você. Sua soma total de LUCRO é R$: $somaLucro');
          </script>";
} elseif ($somaDespesa > $somaLucro) {
    echo "<script>alert('Cuidado! Suas despesas foram maiores este mês. Sua soma total de DESPESAS é R$: $somaDespesa');
          </script>";
} else if($somaDespesa = $somaLucro){
    echo "<script>alert('O periodo está equilibrado, sem Lucro nem Despesa.');
          </script>";
}
                } else {
                    header("Location: ../cadastro/index.php");
                }

        echo "</tbody>
        </table>
        <button class='mt-4 btn btn-outline-danger' onclick='mostrarAlertaDespesa()'>Mostrar Soma de Despesas</button>
        <button class='mt-4 btn btn-outline-success' onclick='mostrarAlertaLucro()'>Mostrar Soma de Lucro</button>
        <script>
            function mostrarAlertaDespesa() {
                alert('A soma total das DESPESAS é R$: $somaDespesa');
            }

            function mostrarAlertaLucro() {
                alert('A soma total doS LUCROS é R$: $somaLucro');
            }
        </script>
        </div>";    

            ?>
        </tbody>
    </table>

    <div class="bot">
    <button class="mt-4 btn btn-outline-primary"><a href="../principal/index.php" class="text-decoration-none">Voltar</a></button><br><br>
    </div>

<script>
    document.getElementById('mostrarDados').addEventListener('click', function() {
        var tabelaContainer = document.getElementById('tabelaContainer');
        tabelaContainer.style.display = (tabelaContainer.style.display === 'none') ? 'block' : 'none';
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<!-- LINKS:
    https://pt.stackoverflow.com/questions/243576/exibi%C3%A7%C3%A3o-de-uma-tabela-mysql-na-p%C3%A1gina-html
-->

</html>