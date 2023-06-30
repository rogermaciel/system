<?php
$this->disableAutoLayout();
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            CakePHP: the rapid development PHP framework:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

        <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <header>
            <div class="container text-center">
                <a href="https://cakephp.org/" target="_blank" rel="noopener">
                    <img alt="CakePHP" src="https://cakephp.org/v2/img/logos/CakePHP_Logo.svg" width="350" />
                </a>
                <h1>
                    Sistema
                </h1>
            </div>
        </header>
        <main class="main">
            <div class="container">
                <div class="row">
                    <div class="column-responsive column-100">
                        <div class="users index content ">
                            <div class="users form">
                                <?= $this->Flash->render() ?>
                                <h3>Login</h3>
                                <?= $this->Form->create() ?>
                                <fieldset>
                                    <legend><?= __('Please enter your username and password') ?></legend>
                                    <?= $this->Form->control('email', ['required' => true]) ?>
                                    <?= $this->Form->control('password', ['required' => true]) ?>
                                </fieldset>
                                <?= $this->Form->submit(__('Login')); ?>
                                <?= $this->Form->end() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>



