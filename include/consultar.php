<header>
    <?php include 'menu.php'; ?>
</header>

<form action="consultar.php" method="get">
    <div class="consulta">
        <textarea required maxlength="20" rows="1" class="pesquisa" type="text" name="busca" placeholder="digite o Nº de serie"></textarea>
        <div class="botao">
            <input type="submit" value="Consultar">
        </div>
    </div>
</form>

<?php

include "../conexao.php";

if (isset($_GET['busca'])) {

    $busca = $_GET['busca'];

    $sql = "SELECT * FROM produtos WHERE serial = '$busca'";

    $res = mysqli_query($conexao, $sql);

    $qtdreg = mysqli_num_rows($res);

    if ($qtdreg > 0) {
        echo "<div id='dados-tabela'>
    <table>
        <tr>
            <td>id</td>
            <td>categoria</td>
            <td>marca</td>
            <td>modelo</td>
            <td>serial</td>
            <td>ean</td>
        </tr>";
        while ($row = mysqli_fetch_assoc($res)) {
            include "item.php";
            $id = $row['id'];
            $categoria = $row['categoria'];
            $serial = $busca;
            echo '</table>
            </div>
            <!-- checklist -->
            <div class="botao-checklist">
                <button onclick="mudarEstado()">Checklist</button>
            </div>
            <div id="checklist" style="visibility: hidden;">
            ';
            include('checklist.php');
        }
    } else {
        echo "<br><p class='erro-consulta'>Não foi possível consultar, tente novamente!</p>";
    }
}

if (isset($_GET["deletado"])) {
    echo "<p style='text-align: center'>Produto deletado com sucesso</p>";
}
if (isset($_GET["ndeletado"])) {
    echo "<p style='text-align: center'>Não foi possível deletar produto</p>";
}

?>

<script src="../js/menu.js"></script>
<link href="../css/style.css" rel="stylesheet">