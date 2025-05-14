<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->nome = "Daniel Diogo";
    $conta1->cpf = "107.123.543-42";
    //$conta1->saldo = 1500;

    $conta1->Consultarsaldo();
    echo "<hr>";

    echo $conta1->depositar(500);
    echo"<hr>";

    $conta1->Consultarsaldo();
    echo"<hr>";

    echo $conta1->sacar(700);
    echo"<hr>";

    $conta1->Consultarsaldo();
    echo"<hr>";


?>