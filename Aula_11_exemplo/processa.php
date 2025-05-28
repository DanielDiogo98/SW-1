<?php
    include_once 'exe.01.php';

    $n =$_POST['nome'];
    $p =(float)$_POST['preco'];
    $q =(int)$_POST['qtd'];


    $produto = new produto($n, $p, $q);

    
    $produto->adicionarestoque(5);
    $produto->removerestoque(3);
    $produto->mostrardetalhes();
?>