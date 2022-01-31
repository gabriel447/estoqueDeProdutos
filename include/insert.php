
<?php

include ('../conexao.php');

$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$serial = $_POST["serial"];
$ean = $_POST["ean"];

$sql = "INSERT INTO produtos (categoria,marca,modelo,serial,ean) VALUES ('$categoria','$marca','$modelo','$serial','$ean')";

$res = mysqli_query($conexao, $sql);

if ($res) {
    header("location:cadastrar.php?cadastrado");
} else {
    header("location:cadastrar.php?ncadastrado");
}

?>
