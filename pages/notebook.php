<section class="corpoChecklistTecnico">
    <form method="post">
        <div>
            <h3>testado com outro carregador?</h3>
            <input type="checkbox" name="carga" value="yes" <?php if($carga != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com monitor externo?</h3>
            <input type="checkbox" name="monitor" value="yes" <?php if($monitor != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com outra memoria ram?</h3>
            <input type="checkbox" name="ram" value="yes" <?php if($ram != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado com linux no pendrive?</h3>
            <input type="checkbox" name="linux" value="yes" <?php if($linux != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>testado teclado e touch na bios?</h3>
            <input type="checkbox" name="bios" value="yes" <?php if($bios != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito limpeza e troca da pasta termica?</h3>
            <input type="checkbox" name="pasta" value="yes" <?php if($pasta != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>feito teste de saude em hd?</h3>
            <input type="checkbox" name="hd" value="yes" <?php if($hd != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>verificado serial do windows?</h3>
            <input type="checkbox" name="chave" value="yes" <?php if($chave != '') { echo 'checked'; } ?>> sim
            <br>
        </div>
        <div>
            <h3>verificado se bateria segura carga?</h3>
            <input type="checkbox" name="bateria" value="yes" <?php if($bateria != '') { echo 'checked'; } ?>> sim
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