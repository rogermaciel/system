<div class="column-responsive column-80">
    <div class="articlesTags view content">
        <h3><?= h($articlesTag->Array) ?></h3>
        <table>
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
</div>
