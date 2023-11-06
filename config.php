<?php

    $hostname='localhost';
    $username='root';
    $senha='';
    $nameDB='Faculdade';

    $conexao = new mysqli($hostname,$username,$senha,$nameDB);
    if($conexao->errno)
    {
        echo("erro na conexao");
    }else{
        echo("Funcionando"); 
    }



?>