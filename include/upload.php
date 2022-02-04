<header>
    <?php include 'menu.php'; ?>
</header>

<h1 class="titulo-upload">Alterar foto do perfil</h1>

<p class="aviso-upload">a imagem precisa ser de tamanho (512 x 512)</p>

<div class="upload">
    <?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" required name="arquivo">
        <input class="save" type="submit" value="Salvar">
    </form>
</div>

<?php

include '../conexao.php';

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "../upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql_code = "INSERT INTO arquivo (codigo, nome, data, id) VALUES ('null', '$novo_nome', NOW(), '1')";

    $conexao->query($sql_code);

    if($conexao)
        echo '<p id="tentou">Alterado com sucesso!</p>';
    else
        echo '<p id="tentou">Não deu certo!</p>';
  }

?>

<link href="./css/style.css" rel="stylesheet">