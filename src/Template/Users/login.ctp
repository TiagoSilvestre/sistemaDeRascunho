<?= $this->element('topbar'); ?>

<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>

<?= $this->Html->link(
    'Criar Conta!',
    ['controller' => 'Users', 'action' => 'add', '_full' => true]);
?>
</div>