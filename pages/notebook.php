<section class="corpoChecklistTecnico">
    <form method="post">
        <div>
            <h3>testado com outro carregador?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['carga'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com monitor externo?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['monitor'] != '') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com outra memoria ram?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['ram'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com linux no pendrive?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['linux'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado teclado e touch na bios?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['bios'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito limpeza e troca da pasta termica?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['pasta'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste de saude em hd?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['hd'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>verificado serial do windows?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['chave'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>verificado se bateria segura carga?</h3>
            <input type="checkbox" name="checklist[]" value="yes" <?php if ($campo['bateria'] != '') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div class="notas-finais">
            <h3>Notas finais do checklist</h3>
            <textarea name="checklist[]" placeholder="<?php echo $campo['notas']; ?>" rows="4" cols="50"></textarea>
        </div>
        <div class="enviar-checklist">
            <button name="save" type="submit">Salvar</button>
        </div>
    </form>
</section>

<link href="../css/style.css" rel="stylesheet">

<?php 

include('../conexao.php');

$carga = $_POST['carga'];
$monitor = $_POST['monitor'];
$ram = $_POST['ram'];
$linux = $_POST['linux'];
$bios = $_POST['bios'];
$pasta = $_POST['pasta'];
$hd = $_POST['hd'];
$chave = $_POST['chave'];
$bateria = $_POST['bateria'];
$notas = $_POST['notas'];

$selcheck = "SELECT * FROM `checklist_notebook` WHERE `serie` = '$serial'";
$upcheck = "UPDATE `checklist_notebook` SET `carga`='$carga',`monitor`='$monitor',`ram`='$ram',`linux`='$linux',`bios`='$bios',`pasta`='$pasta',`hd`='$hd',`chave`='$chave',`bateria`='$bateria',`notas`='$notas' WHERE '$id'";

if(isset($_POST['save'])){
    if($selcheck > 0){
        $cons = mysqli_query($conexao, $upcheck);
        
    }
}

?>