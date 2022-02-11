<section class="corpoChecklistTecnico">
    <form method="post">
        <div>
            <h3>testado com outro carregador?</h3>
            <input type="checkbox" name="carga" value="yes" <?php if ($campo['carga'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com monitor externo?</h3>
            <input type="checkbox" name="monitor" value="yes" <?php if ($campo['monitor'] == 'yes') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com outra memoria ram?</h3>
            <input type="checkbox" name="ram" value="yes" <?php if ($campo['ram'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com linux no pendrive?</h3>
            <input type="checkbox" name="linux" value="yes" <?php if ($campo['linux'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado teclado e touch na bios?</h3>
            <input type="checkbox" name="bios" value="yes" <?php if ($campo['bios'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito limpeza e troca da pasta termica?</h3>
            <input type="checkbox" name="pasta" value="yes" <?php if ($campo['pasta'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste de saude em hd?</h3>
            <input type="checkbox" name="hd" value="yes" <?php if ($campo['hd'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>verificado serial do windows?</h3>
            <input type="checkbox" name="chave" value="yes" <?php if ($campo['chave'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>verificado se bateria segura carga?</h3>
            <input type="checkbox" name="bateria" value="yes" <?php if ($campo['bateria'] == 'yes') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div class="notas-finais">
            <h3>Notas finais do checklist</h3>
            <textarea name="notas" placeholder="<?php echo $campo['notas']; ?>" rows="4" cols="50"></textarea>
        </div>
        <div class="enviar-checklist">
            <button name="save" type="submit">Alterar</button>
        </div>
    </form>
</section>

<link href="../css/style.css" rel="stylesheet">
<?php 

include ('../conexao.php');

if(isset($_POST["carga"])){$carga = $_POST["carga"];}
if(isset($_POST["monitor"])){$monitor = $_POST["monitor"];}
if(isset($_POST["ram"])){$ram = $_POST["ram"];}
if(isset($_POST["linux"])){$linux = $_POST["linux"];}
if(isset($_POST["bios"])){$bios = $_POST["bios"];}
if(isset($_POST["pasta"])){$pasta = $_POST["pasta"];}
if(isset($_POST["hd"])){$hd = $_POST["hd"];}
if(isset($_POST["chave"])){$chave = $_POST["chave"];}
if(isset($_POST["bateria"])){$bateria = $_POST["bateria"];}
if(isset($_POST["notas"])){$notas = $_POST["notas"];}

if(isset($_POST["save"])){

$qry = "UPDATE checklist_notebook SET carga = '$carga', monitor = '$monitor', ram = '$ram', linux = '$linux', bios = '$bios', pasta = '$pasta', hd = '$hd', chave = '$chave', bateria = '$bateria', notas = '$notas' WHERE serie = '$serial'";

$conexao->query($qry);

header('location: consultar.php?busca='.$busca);
exit;
}
?>