<?php

include "../conexao.php";

session_start();

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $up = "UPDATE usuarios SET nome = '$nome', login = '$login', senha = '$senha' WHERE '1'";

    $cons = mysqli_query($conexao, $up);

    if ($cons) {
        header("location:perfil.php?editado");
    } else {
        header("location:perfil.php?neditado");
    }
