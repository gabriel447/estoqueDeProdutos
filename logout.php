<?php

if(!isset($_SESSION)){
    session_start();
}

session_destroy(); // Destrói a sessão limpando todos os valores salvos

header('location: index.php');


?>