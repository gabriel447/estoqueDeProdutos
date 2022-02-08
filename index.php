<?php

include('conexao.php');

if(isset($_POST['login']) || isset($_POST['senha'])) {
    if(strlen($_POST['login']) == 0){
        echo '<p class="box-erro">preencha seu e-mail</p>';
    }elseif(strlen($_POST['senha']) == 0){
        echo '<p class="box-erro">preencha sua senha</p>';
}else {

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

    //Obtem dados da linha do banco que ele achou
    $row = mysqli_fetch_assoc($resultado);
    
    if(!isset($_SESSION)){
    //Inicia a sessão de autenticação
    session_start();
    }

    //Armazena informaçoes do usuario na sessao
    $_SESSION['id'] = $row['id'];
    $_SESSION['cargo'] = $row['cargo'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['login'] = $row['login'];
    
    header("Location: pages/home.php");
    
} else {

    echo '<p class="box-erro">falha de autenticação</p>';
    
}

}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body class="fundo-login">
    <!-- Formulário de Login -->
    <div class="box-login">
        <h2>Efetue o login:</h2>
        <form action="" method="post">
            <input type="text" name="login" placeholder="login" />
            <br>
            <input type="password" name="senha" placeholder="senha" />
            <div class="logar">
                <input type="submit" value="Entrar" />
            </div>
        </form>
    </div>
</body>

<link href="./css/style.css" rel="stylesheet">

</html>




