<?php
    $num1 =  $_GET['cxnum1'];
    $num2 =  $_GET['cxnum2'];
    $num3 =  $_GET['cxnum3'];

    $maior = max($num1, $num2, $num3);

    echo "O Maior numero é; $maior <br>";
?>