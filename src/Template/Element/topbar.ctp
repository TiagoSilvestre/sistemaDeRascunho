<header>
    <nav>
        <div class="nav-wrapper">
            <a href="/meusistema/estudos" class="brand-logo">Hello Tiago!</a>
            
            <ul class="right hide-on-med-and-down">
                <li><a href="/meusistema/estudos">Estudos</a></li>
                <li><a href="/meusistema/estudos/add">AddEstudos</a></li>

                <li><?= $this->Html->link('SAIR **', ['controller' => 'Users', 'action' => 'logout']); ?></li>

            </ul>
        </div>
    </nav>
</header>