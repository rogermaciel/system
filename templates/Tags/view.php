
<div class="column-responsive column-80">
    <div class="tags view content">
        <h3><?= h($tag->title) ?></h3>
        <table>
            <tr>
                <th><?= __('Title') ?></th>
                <td><?= h($tag->title) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($tag->id) ?></td>
            </tr>
            <tr>
                <th><?= __('Created') ?></th>
                <td><?= h($tag->created) ?></td>
            </tr>
            <tr>
                <th><?= __('Modified') ?></th>
                <td><?= h($tag->modified) ?></td>
            </tr>
        </table>
        <div class="related">
            <h4><?= __('Related Articles') ?></h4>
            <?php if (!empty($tag->articles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Title') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Body') ?></th>
                            <th><?= __('Published') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tag->articles as $articles) : ?>
                            <tr>
                                <td><?= h($articles->id) ?></td>
                                <td><?= h($articles->user_id) ?></td>
                                <td><?= h($articles->title) ?></td>
                                <td><?= h($articles->slug) ?></td>
                                <td><?= h($articles->body) ?></td>
                                <td><?= h($articles->published) ?></td>
                                <td><?= h($articles->created) ?></td>
                                <td><?= h($articles->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
