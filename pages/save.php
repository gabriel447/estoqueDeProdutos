<?php 

include ('../conexao.php');

$valores = null;

if(isset($_POST['ck'])){
    $valores = $_POST['ck'];
}

if($valores !== null){
    for($i = 0; $i < count($valores); $i++){
        echo "<p>{$valores{$i}}</p>";
    }
}

?>

<a href="consultar.php">voltar</a>