<?php
    $nome = $_GET['cxnome'];
    $nota1 =  $_GET['cxnota1'];
    $nota2 =  $_GET['cxnota2'];
    $nota3 =  $_GET['cxnota3'];

    $media = ($nota1 +  $nota2 + $nota3) / 3;

    echo "O seu nome é; $nome <br>";
    echo "Suas notas sao; $nota1 $nota2 $nota3<br>";
    echo "A sua média é: $media"
?>