<?php


    //Exibe i nformações sobre a variavel
    //var_dump($_GET);
     
    $nome = $_GET["nome"];

    $idade = $_GET["idade"];

    $anoNascimento = 2021 - $idade;

    if(isset ( $_GET["fez-aniversario"])){
        $anoNascimento = $anoNascimento - 1  ;
    }

    echo "<h1>Olá $nome você nasceu em $anoNascimento </h1";