<?php
$this->layout = 'CakeLte.login';
?>
<?= $this->Flash->render() ?>
<div class="card card-primary card-outline">
    <?= $this->Form->create() ?>
    <div class="card-body">
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </div>

    <div class="card-footer d-flex">
        <div class="ml-auto">
            <?= $this->Form->submit(__('Login')); ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>
