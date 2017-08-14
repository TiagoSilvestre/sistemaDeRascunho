<?= $this->element('topbar'); ?>

<div class="container">
    <div class="row">
        <?php foreach ($result as $row): ?>
        <a href="<?php echo 'estudos/edit/'. $row->id; ?>">
                <div class="col s3 center-align hoverable card-panel">
                    <img src="<?php echo 'img' . DS . $row->imagem; ?>" />
                    <h4><?php echo $row->titulo; ?></h4>
                </div>
            </a>    
        <?php endforeach; ?>
    </div>
</div>