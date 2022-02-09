<?php include('../protect.php'); ?>

<header>
    <?php include 'menu.php'; ?>
</header>

<?php

include '../conexao.php';

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    // var_dump($arquivo);

    if ($arquivo['error']) {
        die('Falha ao enviar arquivo');
    }

    if ($arquivo['size'] > 2097152) {
        die('Arquivo excede o limite de tamanho (2mb)');
    }

    $pasta = "../upload/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNome = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg")
        die('O tipo de formato deve ser JPG');

    $path = $pasta . $novoNome . "." . $extensao;

    $move = move_uploaded_file($arquivo['tmp_name'], $path);

    if ($move) {
        $conexao->query("INSERT INTO arquivos (nome, path) VALUES('$nomeDoArquivo', '$path')")
            or die($conexao->error);
        echo "<p>Arquivo enviado com sucesso!</p>";
    } else
        echo "<p>Falha ao enviar arquivo</p>";
}

$sql_query = $conexao->query("SELECT * FROM arquivos") or die($conexao->error);

?>

<h1 class="titulo-upload">Alterar foto do perfil</h1>

<p class="aviso-upload">a imagem precisa ser de tamanho (512 x 512)</p>

<div class="div-upload">
    <form method="POST" enctype="multipart/form-data" action="">
        <p><label for="">Selecione o arquivo</label>
            <input name="arquivo" type="file">
            <button name="upload" type="submit">Enviar arquivo</button>
    </form>
</div>

<?php while ($arquivo = $sql_query->fetch_assoc()) { ?>
    <div class="line-foto">
        <img id="foto" src="<?php echo $arquivo['path']; ?>" alt="Minha Figura">
    </div>
<?php
}
?>

<link href="./css/style.css" rel="stylesheet">