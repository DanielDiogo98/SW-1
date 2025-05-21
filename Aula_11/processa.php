<?php
    include_once 'exe.01.php';
    $produto = new produto("mouse", 150.00, 10);
    $produto->adicionarestoque(5);
    $produto->removerestoque(3);
    $produto->mostrardetalhes();
?>