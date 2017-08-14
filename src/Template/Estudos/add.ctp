<?= $this->element('topbar'); ?>

<?php
if(isset($erro)){echo $erro;}
?>
<div>
    <form method="post" accept-charset="utf-8" enctype="multipart/form-data" action="/meusistema/estudos/add" class="container">
        <div style="display:none;">
            <input type="hidden" name="_method" value="POST"/>
        </div>    
        
            <legend>Adicionar</legend>
            <div class="input text">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" maxlength="255" id="titulo"/>
            </div>        
            <div class="input text">
                <label for="link">Link</label>
                <input type="text" name="link" maxlength="255" id="link"/>
            </div>        
            <div class="input textarea">
                <label for="texto">Texto</label>
                <textarea name="texto" id="texto" rows="5"></textarea>
            </div>        
            
            <div class="contfile">
                <div class="campofile">
                    <div class="input file required inputFile">
                        <span>Imagem</span>
                        <input type="file" name="imagem" required="required" id="imagem">
                    </div>
                </div>
            </div>
        </fieldset>
        
        <button type="submit">Submit</button>
    </form>
</div>