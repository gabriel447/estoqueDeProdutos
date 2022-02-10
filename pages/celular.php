<section class="corpoChecklistTecnico">
    <form method="post" action="save.php">
        <div>
            <h3>testado com outro carregador?</h3>
            <input name="ck[]" type="checkbox" value="yes" <?php if ($campo['carga'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>retirado conta google?</h3>
            <input name="ck[]" type="checkbox" value="yes" <?php if ($campo['google'] != '') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito software?</h3>
            <input name="ck[]" type="checkbox" value="yes" <?php if ($campo['rom'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>executado phone check?</h3>
            <input name="ck[]" type="checkbox" value="yes" <?php if ($campo['app'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste de stress?</h3>
            <input name="ck[]" type="checkbox" value="yes" <?php if ($campo['stress'] != '') {
                                                                    echo 'checked';
                                                                } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste com chip?</h3>
            <input name="ck[]" type="checkbox" value="yes" <?php if ($campo['chip'] != '') {
                                                                echo 'checked';
                                                            } ?>> sim
            <br>
        </div>
        <div class="notas-finais">
            <h3>Notas finais do checklist</h3>
            <textarea name="ck[]" placeholder="<?php echo $campo['notas']; ?>" rows="4" cols="50"></textarea>
        </div>
        <div class="enviar-checklist">
            <button type="submit">Salvar</button>
        </div>
    </form>
</section>

<link href="../css/style.css" rel="stylesheet">

 <?php

// $update = "UPDATE checklist_celular SET carga = '', google = '', rom = '', app = '', stress = '', chip = '', notas = '' WHERE $serial";

// $result = $conexao->query($update);

// if($result){
//     header('location: consultar.php?busca='.$busca);
// }

?>