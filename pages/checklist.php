<?php 

// se a categoria for notebook

if ($categoria == 'Notebook') {
    $query = "SELECT * FROM checklist_notebook WHERE serie = '$serial'";
    $result = mysqli_query($conexao, $query);
    $qtres = mysqli_num_rows($result);
    if($qtres > 0){
        while($campo = mysqli_fetch_assoc($result)){
            $carga = $campo['carga'];
            $monitor = $campo['monitor'];
            $ram = $campo['ram'];
            $linux = $campo['linux'];
            $bios = $campo['bios'];
            $pasta = $campo['pasta'];
            $hd = $campo['hd'];
            $chave = $campo['chave'];
            $bateria = $campo['bateria'];
            $notas = $campo['notas'];
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
            $carga = $campo['carga'];
            $google = $campo['google'];
            $rom = $campo['rom'];
            $app = $campo['app'];
            $stress = $campo['stress'];
            $chip = $campo['chip'];
            $notas = $campo['notas'];
            include('celular.php');
        }
    }
} else {
    //echo ('erro!');
}
