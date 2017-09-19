<?= $this->element('topbar'); ?>

<?php 
    date_default_timezone_set('America/Sao_Paulo');

?>


    <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?= $this->Form->control('username') ?>
            <?= $this->Form->control('password') ?>
            <?= $this->Form->control('role', ['options' => ['admin' => 'Admin', 'author' => 'Author']]) ?>
            <?= $this->Form->hidden('created') ?>
            <?= $this->Form->hidden('modified') ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')); ?>
    <?= $this->Form->end() ?>
