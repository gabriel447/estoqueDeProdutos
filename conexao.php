<?php
    //paremetros para conectar com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "projeto");
    //verificando se conectou
    if($conexao == false){
        die("Erro: Não foi possível conectar ao Banco de dados!" . mysqli_connect_error());
    }
    
?>