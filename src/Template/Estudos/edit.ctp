<?= $this->element('topbar'); ?>

 <div class="container">
    <h1><?php echo $resultView->titulo; ?></h1>
    <form method="post" accept-charset="utf-8" action="<?php echo '/meusistema/estudos/edit/'.$resultView->id; ?>">
        <div style="display:none;">
            <input type="hidden" name="_method" value="PUT"/>
        </div>
        <div class="input text">
            <label for="link">Link</label>
            <input type="text" name="link" maxlength="255" id="link" value="<?php echo $resultView->link; ?>"/>
        </div>
        <div class="input textarea">
            <label for="texto">Anotações</label>
            <textarea name="texto" id="texto" rows="5"><?php echo $resultView->texto; ?></textarea>
        </div>
        <button type="submit" class="btn waves-effect waves-light red lighten-3">Salvar</button>
        <a class="waves-effect waves-light btn" href="/meusistema/estudos">Voltar</a>
    </form> 
</div>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>