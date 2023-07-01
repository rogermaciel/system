<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>

    <?= $this->element('header/menu') ?>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <?= $this->element('header/search-block') ?>

    <!-- Messages Dropdown Menu -->
    <?= $this->element('header/messages') ?>

    <!-- Notifications Dropdown Menu -->
    <?= $this->element('header/notifications') ?>

    <?= $this->element('header/fullscreen') ?>

    <?= $this->element('header/control-sidebar-slide') ?>
</ul>
