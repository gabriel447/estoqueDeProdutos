<section class="corpoChecklistTecnico">
    <form method="post">
        <div>
            <h3>testado com outro carregador?</h3>
            <input name="carga" type="checkbox" value="yes"> sim
            <br>                                                                                                                                                                                                                                            
        </div>
        <div>
            <h3>retirado conta google?</h3>
            <input name="google" type="checkbox" value="yes"> sim
            <br>
        </div>
        <div>
            <h3>feito software?</h3>
            <input name="rom" type="checkbox" value="yes"> sim
            <br>
        </div>
        <div>
            <h3>executado phone check?</h3>
            <input name="app" type="checkbox" value="yes"> sim
            <br>
        </div>
        <div>
            <h3>feito teste de stress?</h3>
            <input name="stress" type="checkbox" value="yes"> sim
            <br>
        </div>
        <div>
            <h3>feito teste com chip?</h3>
            <input name="chip" type="checkbox" value="yes"> sim
            <br>
        </div>
        <div class="notas-finais">
            <h3>Notas finais do checklist</h3>
            <textarea name="notas" placeholder="escreva aqui.." rows="4" cols="50"></textarea>
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
$google = $_POST['google'];
$rom = $_POST['rom'];
$app = $_POST['app'];
$stress = $_POST['stress'];
$chip = $_POST['chip'];
$notas = $_POST['notas'];

$selcheck = "SELECT * FROM `checklist_celular` WHERE `serie` = '$serial'";
$upcheck = "UPDATE `checklist_celular` SET `carga`='$carga',`google`='$google',`rom`='$rom',`app`='$app',`stress`='$stress',`chip`='$chip',`notas`='$notas' WHERE '$id'";

if(isset($_POST['save'])){
    if($selcheck > 0){
        $conexao->query($upcheck);
    }
}

?>