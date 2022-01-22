<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<nav>
    <?php 
    include 'menu.php';
    ?>
</nav>

<?php include '../autentica.php'; ?> 

<div class="home">
<a><p>Seja bem vindo</p><?php echo $_SESSION['nome']; ?></a> 
</div>

<link href="../css/style.css" rel="stylesheet">

</html>