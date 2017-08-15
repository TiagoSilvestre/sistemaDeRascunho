<header>
    <nav>
        <div class="nav-wrapper">
            
            <?= $this->Html->link('Draft', ['controller' => 'Estudos', 'action' => 'index'], array('class' => 'brand-logo')); ?>

            <ul class="right hide-on-med-and-down">
                <li><?= $this->Html->link('Estudos', ['controller' => 'Estudos', 'action' => 'index']); ?></li>
                <li><?= $this->Html->link('AddEstudos', ['controller' => 'Estudos', 'action' => 'add']); ?></li>
                <li><?= $this->Html->link('SAIR **', ['controller' => 'Users', 'action' => 'logout']); ?></li>
            </ul>
        </div>
    </nav>
</header>