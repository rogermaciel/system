<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticlesTag $articlesTag
 */
?>
<?php
$this->assign('title', __('Add Articles Tag'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Articles Tags', 'url' => ['action' => 'index']],
    ['title' => 'Add'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($articlesTag) ?>
  <div class="card-body">
    <?php
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

