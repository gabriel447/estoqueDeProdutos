<?php 

// se a categoria for notebook

if ($categoria == 'Notebook') {
    $query = "SELECT * FROM checklist_notebook WHERE serie = '$serial'";
    $result = mysqli_query($conexao, $query);
    $qtres = mysqli_num_rows($result);
    if($qtres > 0){
        while($campo = mysqli_fetch_assoc($result)){
            include('notebook.php');
        }
    }
} else {
    //echo ('erro!');
}

// se a categoria for celular

if ($categoria == 'Celular') {
    $query = "SELECT * FROM checklist_celular WHERE serie = '$serial'";
    $result = mysqli_query($conexao, $query);
    $qtres = mysqli_num_rows($result);
    if($qtres > 0){
        while($campo = mysqli_fetch_assoc($result)){
            include('celular.php');
        }
    }
} else {
    //echo ('erro!');
}
