<?php

    $host = "localhost";
    $user = "root";
    $pass = "usbw";
    $banco = "computador";

    //criando o comando de conexão
    $conexao = mysqli_connect($host, $user, $pass, $banco)
    or die ("Problemas na conexão");

    mysqli_set_charset($conexao, "UTF-8");
?>