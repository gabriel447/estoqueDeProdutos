<?php include('../protect.php'); ?>

<nav>
    <?php include 'menu.php' ?>
</nav>

<div id="cadastro">
    <form action="insert.php" method="post">
        <div>
            <h3>Categoria</h3>
            <select class="campos-cadastro" name="categoria">
                <option selected>selecione</option>
                <?php include 'categorias.php' ?>
            </select>
            <h3>marca</h3>
            <select class="campos-cadastro" name="marca">
                <option selected>selecione</option>
                <?php include 'marcas.php' ?>
            </select>
        </div>
        <section>
            <div>
                <h3>modelo</h3>
                <textarea class="campos-cadastro" maxlength="13" minlength="3" name="modelo" placeholder="digite aqui.." rows="1"  id="digite"></textarea>
            </div>
            <div>
                <h3>serial</h3>
                <textarea class="campos-cadastro" required maxlength="20" minlength="4" name="serial" placeholder="digite aqui.." rows="1"  id="digite"></textarea>
            </div>
            <div>
                <h3>ean</h3>
                <textarea class="campos-cadastro" required type="text" minlength="13" maxlength="13" name="ean" placeholder="digite aqui.." rows="1"  id="digite"></textarea>
            </div>
            <br>
            <div class="botao">
                <input name="check" type="submit" value="cadastrar">
            </div>
        </section>
    </form>
</div>

<?php

if (isset($_GET["cadastrado"])) {
    echo "<p style='text-align: center'>Produto cadastrado com sucesso</p>";
}
if (isset($_GET["ncadastrado"])) {
    echo "<p style='text-align: center'>Não foi possível cadastrar produto</p>";
}

?>

<link href="./css/style.css" rel="stylesheet">