<?php
    $email = $_POST['email'];
    $senha= $_POST['senha'];

    if ($email == "aluno@email.com" and $senha == "1234"){
        //manda para autorizado.php
        header('Location: painel/autorizado.php');
    }else{
        //manda para nao_autorizado.php
        header('Location: painel/nao_autorizado.php');
    }
    
?>
