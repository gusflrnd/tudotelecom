<?php
    include('../db/conexao.php'); // Importando a conexão
    session_start(); 
    // Pegando o digitado nos inputs

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // SQL
  
    $sql_email = "SELECT * FROM tb_usuario WHERE email = '$email'"; // Verifica se o email ja esta cadastrado no db
    $sql = "INSERT INTO tb_usuario VALUES (null,'$nome', '$email','$senha')"; // Insere o usuário no banco
                         
    $execucao_sql = mysqli_query($conn, $sql_email); // Verificação de email já cadastrado
    
    // Verificando número de linhas retornadas na verificação anterior
    $numero_linha = $execucao_sql -> num_rows;
    if ($numero_linha >= 1) {
        echo "<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                  <p class='fw-semibold text-light m-0'>Este e-mail já esta cadastrado!</p> 
              </div>";
    } else {
        $conn -> query($sql); // Executando sql de cadastro de usuário no banco
        
        // Executando o sql no banco e colocando o resultado dessa execução na variável '$execucao_sql_usuario_dados' (EM FORMA DE TABELA)
        $execucao_sql_usuario_dados = mysqli_query($conn, $sql_email);
        
        // Percorrendo os dados do usuário e colocando-os na variável 'dados_usuario' (EM FORMA DE ARRAY)
        $dados_usuario = mysqli_fetch_assoc($execucao_sql_usuario_dados);

        // Colocando os dados usuário em variáveis SESSION (globais)
        $_SESSION['id_usuario'] = $dados_usuario['id_usuario'];
        $_SESSION['nome'] = $dados_usuario['nome'];
        $_SESSION['email'] = $dados_usuario['email'];
        $_SESSION['senha'] = $dados_usuario['senha'];
        
        header("Location: ../principal/index.php"); // Redirecionando para tela principal de usuário logado
    }
    
?>