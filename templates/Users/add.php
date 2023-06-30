<div class="column-responsive column-80">
    <div class="users form content">
        <?= $this->Form->create($user) ?>
        <fieldset>
            <legend><?= __('Add User') ?></legend>
            <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>