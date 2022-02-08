<?php

include ('../conexao.php');

$id = $_POST['id'];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$serial = $_POST["serial"];
$ean = $_POST["ean"];

//quando cadastra o produto ja gera automaticamente um checklist dele

$sql = "INSERT INTO `produtos` (categoria,marca,modelo,serial,ean) VALUES ('$categoria','$marca','$modelo','$serial','$ean')";
$checkcel = "INSERT INTO `checklist_celular` (`id`, `carga`, `google`, `rom`, `app`, `stress`, `chip`, `notas`, `serie`) VALUES (NULL, '', '', '', '', '', '', '', '$serial')";
$checknote = "INSERT INTO `checklist_notebook` (`id`, `carga`, `monitor`, `ram`, `linux`, `bios`, `pasta`, `hd`, `chave`, `bateria`, `notas`, `serie`) VALUES (NULL, '', '', '', '', '', '', '', '', '', '', '$serial')";

$res = mysqli_query($conexao, $sql);

if(isset($_POST['check'])){ 
     if($categoria == 'Notebook'){
         $conexao->query($checknote);
     }elseif($categoria == 'Celular'){
        $conexao->query($checkcel);
     }else{
         echo 'erro';
     }
}

if ($res) {
    header("location:cadastrar.php?cadastrado");
} else {
    header("location:cadastrar.php?ncadastrado");
}

?>
