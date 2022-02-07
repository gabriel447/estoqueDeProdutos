<?php

require('conexao.php');

$login = $_POST["login"];
$senha = $_POST["senha"];

//consulta a base dados para verificar se existe o login e senha digitado
$consulta = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'" or die("erro");;
//guardamos em uma variavel o resultado da conexão e da consulta
$resultado = mysqli_query($conexao, $consulta);
//aqui ele armazena a quantidade de registros que foram compativeis com o banco
$qtdreg = mysqli_num_rows($resultado);


//se a quantidade de registros compativeis foi maior que nada
if ($qtdreg > 0) {
    
    //Inicia a sessão de autenticação
    session_start();

    //Obtem dados da linha do banco que ele achou
    $row = mysqli_fetch_assoc($resultado);

    //Armazena informaçoes do usuario na sessao
    $_SESSION['id'] = $row['id'];
    $_SESSION['cargo'] = $row['cargo'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['login'] = $row['login'];
    
    header("Location: include/home.php");
    
} else {

    header("Location: index.php?erro=1");
    
}
