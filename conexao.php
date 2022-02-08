<?php
    //trocar valores quando subir na nuvem
    $host = 'localhost';
    $user= 'root';
    $pass = '';
    $bd = 'projeto';

    //paremetros para conectar com o banco de dados
    $conexao = mysqli_connect($host, $user, $pass, $bd);
    //verificando se conectou
    if($conexao == false){
        die("Erro: Não foi possível conectar ao Banco de dados!" . mysqli_connect_error());
    }
