<?php
    session_start(); // Inicia a sessão (necessário iniciar a sessão para destrui-la)
    
    // Destroindo as variaveis que permitem a sessão
    unset($_SESSION['id_usuario']);
    unset($_SESSION['nome']);
    unset($_SESSION['email']); 
    unset($_SESSION['senha']);
    session_destroy(); // Destroi a sessão em sí
    
    header('Location: ../principal/index.Principal.php'); // Redirecionando para tela de usuário NÃO logado
?>