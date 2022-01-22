<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<header class="box-erro">
    <?php

    if (isset($_GET['erro'])) {
        echo "<p>falha de autenticação</p>";
    }

    if(isset($_GET['autentica'])) {
        echo '<p>acesso negado!</p>';
    }

    ?>
</header>

<body class="fundo-login">
    <!-- Formulário de Login -->
    <div class="box-login">
        <h2>Efetue o login:</h2>
        <form action="login.php" method="post">
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