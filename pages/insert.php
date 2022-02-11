<?php

include ('../conexao.php');

$id = $_POST['id'];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$ean = $_POST["ean"];

if (isset($_POST['serial'])) 

    $serial = $_POST['serial'];

    $sql = "SELECT * FROM produtos WHERE serial = '$serial'";

    $res = mysqli_query($conexao, $sql);

    $qtdreg = mysqli_num_rows($res);

    if ($qtdreg < 1) {

//quando cadastra o produto ja gera automaticamente um checklist dele

$sql = "INSERT INTO `produtos` (categoria,marca,modelo,serial,ean) VALUES ('$categoria','$marca','$modelo','$serial','$ean')";
$checkcel = "INSERT INTO `checklist_celular` (`id`, `carga`, `google`, `rom`, `app`, `stress`, `chip`, `notas`, `serie`) VALUES (NULL, '', '', '', '', '', '', '', '$serial')";
$checknote = "INSERT INTO `checklist_notebook` (`id`, `carga`, `monitor`, `ram`, `linux`, `bios`, `pasta`, `hd`, `chave`, `bateria`, `notas`, `serie`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '$serial')";

$conexao->query($sql);

if(isset($_POST['check'])){ 
     if($categoria == 'Notebook'){
         $conexao->query($checknote);
     }elseif($categoria == 'Celular'){
        $conexao->query($checkcel);
     }else{
         echo 'erro';
     }
}
    header("location:cadastrar.php?cadastrado");
}else{
    header("location:cadastrar.php?ncadastrado");
}



