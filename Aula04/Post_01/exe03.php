<?php
    
    $login =  $POST['cxlogin'];
    $senha =  $_POST['cxsenha'];

    if ($login == "etec" and $senha == "informatica"){
        echo "logado com sucesso";
    }else{
        echo"O login nao deu certo tente novamente";
    }
    
    
?>