<div class="column-responsive column-80">
    <div class="tags form content">
        <?= $this->Form->create($tag) ?>
        <fieldset>
            <legend><?= __('Add Tag') ?></legend>
            <?php
            echo $this->Form->control('title');
            echo $this->Form->control('articles._ids', ['options' => $articles]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>