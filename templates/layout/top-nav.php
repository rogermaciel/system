<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $this->fetch('title') . ' | ' . strip_tags($this->CakeLte->getConfig('app-name')) ?></title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->fetch('meta') ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <?= $this->Html->css('CakeLte./AdminLTE/plugins/fontawesome-free/css/all.min.css') ?>
        <?= $this->Html->css('CakeLte./AdminLTE/dist/css/adminlte.min.css') ?>
        <?= $this->Html->css('CakeLte.style') ?>
        <?= $this->element('layout/css') ?>
        <?= $this->fetch('css') ?>
    </head>

    <body class="hold-transition layout-top-nav <?= $this->CakeLte->getBodyClass() ?>">
        <div class="wrapper">
            <nav class="main-header navbar navbar-expand-md <?= $this->CakeLte->getHeaderClass() ?>">
                <div class="container">
                    <a href="<?= $this->Url->build('/') ?>" class="navbar-brand">
                        <?= $this->Html->image($this->CakeLte->getConfig('app-logo'), ['alt' => $this->CakeLte->getConfig('app-name') . ' logo', 'class' => 'brand-image']) ?>
                        <span class="brand-text font-weight-light"><?= $this->CakeLte->getConfig('app-name') ?></span>
                    </a>
                    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <?= $this->element('header/menu') ?>
                        </ul>
                        <?= $this->element('header/search-default') ?>
                    </div>
                    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                        <?= $this->element('header/messages') ?>
                        <?= $this->element('header/notifications') ?>
                        <?= $this->element('header/fullscreen') ?>
                        <?= $this->element('header/control-sidebar-slide') ?>
                    </ul>
                </div>
            </nav>
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container">
                        <?= $this->element('content/header') ?>
                    </div>
                </div>
                <div class="content">
                    <div class="container">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div><!-- /.container-fluid -->
                </div>
            </div>
            <aside class="control-sidebar control-sidebar-dark">
                <?= $this->element('aside/main') ?>
            </aside>
            <footer class="main-footer">
                <div class="container">
                    <?= $this->element('footer/main') ?>
                </div>
            </footer>
        </div>
        <?= $this->Html->script('CakeLte./AdminLTE/plugins/jquery/jquery.min.js') ?>
        <?= $this->Html->script('CakeLte./AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>
        <?= $this->Html->script('CakeLte./AdminLTE/dist/js/adminlte.min.js') ?>
        <?= $this->element('layout/script') ?>
        <?= $this->fetch('script') ?>
    </body>

</html>