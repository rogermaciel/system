<li class="nav-item d-none d-sm-inline-block dropdown">
    <?= $this->Html->link(__('Cadastros'), '#', ['id' => 'dropdownSubMenu1', 'class' => 'nav-link dropdown-toggle', 'data-toggle' => 'dropdown', 'aria-haspopup' => true, 'aria-expanded' => false]) ?>
    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
        <li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>
        <li><?= $this->Html->link(__('Tags'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>

        <?php /* ?>
        <li class="dropdown-divider"></li>

        <!-- Level two dropdown-->
        <li class="dropdown-submenu dropdown-hover">
            <?= $this->Html->link(__('Level 1'), '#', ['id' => 'dropdownSubMenu2', 'class' => 'nav-link dropdown-toggle', 'role' => 'button', 'data-toggle' => 'dropdown', 'aria-haspopup' => true, 'aria-expanded' => false]) ?>
            <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li><?= $this->Html->link(__('Level 2'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'dropdown-item', 'tabindex' => '-1']) ?></li>

                <!-- Level three dropdown-->
                <li class="dropdown-submenu">
                    <?= $this->Html->link(__('Level 2'), '#', ['id' => 'dropdownSubMenu3', 'class' => 'nav-link dropdown-toggle', 'role' => 'button', 'data-toggle' => 'dropdown', 'aria-haspopup' => true, 'aria-expanded' => false]) ?>
                    <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                        <li><?= $this->Html->link(__('Level 3'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>
                        <li><?= $this->Html->link(__('Level 3'), ['controller' => 'Tags', 'action' => 'index'], ['class' => 'dropdown-item']) ?></li>
                    </ul>
                </li>
                <!-- End Level three -->

                <li><a href="#" class="dropdown-item">level 2</a></li>
                <li><a href="#" class="dropdown-item">level 2</a></li>
            </ul>
        </li>
        <?php */ ?>
    </ul>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <?= $this->Html->link(__('Debug'), '/cake_lte/debug', ['class' => 'nav-link']) ?>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <?= $this->Html->link(__('Theme'), '/cake_lte/AdminLTE/index.html', ['class' => 'nav-link']) ?>
</li>