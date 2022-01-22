<nav>
    <?php include 'menu.php' ?>
</nav>

<div id="cadastro">
    <form id='teste' action="insert.php" method="post">
        <!--selects-->
        <div>
            <h3 class="titulos-cadastro">Categoria</h3>
            <select class="selects-cadastro" name="categoria">
                <option value=" " selected>selecione</option>
                <?php include 'categorias.php' ?>
            </select>
            <h3 class="titulos-cadastro">marca</h3>
            <select class="selects-cadastro" name="marca">
                <option value=" " selected>selecione</option>
                <?php include 'marcas.php' ?>
            </select>
        </div>
        <!--selects-->
        <!--textarea-->
        <section>
            <div>
                <h3 class="titulos-cadastro">modelo</h3>
                <textarea maxlength="13" minlength="3" name="modelo" placeholder="digite aqui.." rows="1"  id="digite"></textarea>
            </div>
            <div>
                <h3 class="titulos-cadastro">serial</h3>
                <textarea required maxlength="20" minlength="4" name="serial" placeholder="digite aqui.." rows="1"  id="digite"></textarea>
            </div>
            <div>
                <h3 class="titulos-cadastro">ean</h3>
                <textarea required type="text" minlength="13" maxlength="13" name="ean" placeholder="digite aqui.." rows="1"  id="digite"></textarea>
            </div>
            <br>
            <div class="botao">
                <input type="submit" value="cadastrar">
            </div>
        </section>
        <!--textarea-->
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