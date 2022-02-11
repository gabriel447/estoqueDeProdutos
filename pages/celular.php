<section class="corpoChecklistTecnico">
    <form method="post">
        <div>
            <h3>testado com outro carregador?</h3>
            <input name="carga" type="checkbox" value="yes" <?php if ($campo['carga'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>retirado conta google?</h3>
            <input name="google" type="checkbox" value="yes" <?php if ($campo['google'] == 'yes') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito software?</h3>
            <input name="rom" type="checkbox" value="yes" <?php if ($campo['rom'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>executado phone check?</h3>
            <input name="app" type="checkbox" value="yes" <?php if ($campo['app'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste de stress?</h3>
            <input name="stress" type="checkbox" value="yes" <?php if ($campo['stress'] == 'yes') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste com chip?</h3>
            <input name="chip" type="checkbox" value="yes" <?php if ($campo['chip'] == 'yes') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div class="notas-finais">
            <h3>Notas finais do checklist</h3>
            <textarea name="notas" placeholder="<?php echo $campo['notas']; ?>" rows="4" cols="50"></textarea>
        </div>
        <div class="enviar-checklist">
            <button name="save" type="submit">Salvar</button>
        </div>
    </form>
</section>

<link href="../css/style.css" rel="stylesheet">

<?php 

include ('../conexao.php');

if(isset($_POST["carga"])){$carga = $_POST["carga"];}
if(isset($_POST["google"])){$google = $_POST["google"];}
if(isset($_POST["rom"])){$rom = $_POST["rom"];}
if(isset($_POST["app"])){$app = $_POST["app"];}
if(isset($_POST["stress"])){$stress = $_POST["stress"];}
if(isset($_POST["chip"])){$chip = $_POST["chip"];}
if(isset($_POST["notas"])){$notas = $_POST["notas"];}

if(isset($_POST["save"])){

$qry = "UPDATE checklist_celular SET carga = '$carga', google = '$google', rom = '$rom', app = '$app', stress = '$stress', chip = '$chip', notas = '$notas' WHERE serie = '$serial'";

$conexao->query($qry);

header('location: consultar.php?busca='.$busca);

}
?>