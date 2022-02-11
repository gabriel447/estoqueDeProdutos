<?php 

include ('../conexao.php');

$valores = null;

if(isset($_POST['ck'])){
    $valores = $_POST['ck'];
}else{
    $valores = $_POST[''];
}

if($valores !== null){
    for($i = 0; $i < count($valores); $i++){
        // $array = $valores[$i];
        // echo $array;
    }
}

if(isset($_POST['save'])){
    $qry = mysqli_query($conexao, "UPDATE checklist_celular SET carga = '$valores[0]', google = '$valores[1]', rom = '$valores[2]', app = '$valores[3]', stress = '$valores[4]', chip = '$valores[5]', notas = '$valores[6]' WHERE $serial");
}

if($qry){
    echo "success";
}else{
    echo "not success";
}
?>

<a href="consultar.php">voltar</a>