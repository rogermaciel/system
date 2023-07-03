<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticlesTag $articlesTag
 */
?>
<?php
$this->assign('title', __('Edit Articles Tag'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Articles Tags', 'url' => ['action' => 'index']],
    ['title' => 'View', 'url' => ['action' => 'view', $articlesTag->article_id]],
    ['title' => 'Edit'],
]);
?>

<div class="card card-primary card-outline">
  <?= $this->Form->create($articlesTag) ?>
  <div class="card-body">
    <?php
    ?>
  </div>

  <div class="card-footer d-flex">
    <div class="">
      <?= $this->Form->postLink(
          __('Delete'),
          ['action' => 'delete', $articlesTag->article_id],
          ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->article_id), 'class' => 'btn btn-danger']
      ) ?>
    </div>
    <div class="ml-auto">
      <?= $this->Form->button(__('Save')) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>

  <?= $this->Form->end() ?>
</div>

