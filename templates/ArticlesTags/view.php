<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ArticlesTag $articlesTag
 */
?>

<?php
$this->assign('title', __('Articles Tag'));
$this->Breadcrumbs->add([
    ['title' => 'Home', 'url' => '/'],
    ['title' => 'List Articles Tags', 'url' => ['action' => 'index']],
    ['title' => 'View'],
]);
?>

<div class="view card card-primary card-outline">
  <div class="card-header d-sm-flex">
    <h2 class="card-title"><?= h($articlesTag->Array) ?></h2>
  </div>
  <div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <tr>
            <th><?= __('Article') ?></th>
            <td><?= $articlesTag->has('article') ? $this->Html->link($articlesTag->article->title, ['controller' => 'Articles', 'action' => 'view', $articlesTag->article->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tag') ?></th>
            <td><?= $articlesTag->has('tag') ? $this->Html->link($articlesTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $articlesTag->tag->id]) : '' ?></td>
        </tr>
    </table>
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
      <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articlesTag->article_id], ['class' => 'btn btn-secondary']) ?>
      <?= $this->Html->link(__('Cancel'), ['action' => 'index'], ['class' => 'btn btn-default']) ?>
    </div>
  </div>
</div>


