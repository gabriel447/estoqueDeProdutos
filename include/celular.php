<section class="corpoChecklistTecnico">
    <form method="post">
        <div>
            <h3>testado com outro carregador?</h3>
            <input name="carga" type="checkbox" value="yes" <?php if($carga != '') { echo 'checked'; } ?>> sim
            <br>                                                                                                                                                                                                                                            
        </div>
        <div>
            <h3>retirado conta google?</h3>
            <input name="google" type="checkbox" value="yes" <?php if($google != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito software?</h3>
            <input name="rom" type="checkbox" value="yes" <?php if($rom != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>executado phone check?</h3>
            <input name="app" type="checkbox" value="yes" <?php if($app != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste de stress?</h3>
            <input name="stress" type="checkbox" value="yes" <?php if($stress != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste com chip?</h3>
            <input name="chip" type="checkbox" value="yes" <?php if($chip != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div class="notas-finais">
            <h3>Notas finais do checklist</h3>
            <textarea name="notas" placeholder="<?php echo $notas;?>" rows="4" cols="50"></textarea>
        </div>
        <div class="enviar-checklist">
            <button name="save" type="submit">Salvar</button>
        </div>
    </form>
</section>

<link href="../css/style.css" rel="stylesheet">