<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Founder'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="founders index large-9 medium-8 columns content">
    <h3><?= __('Founders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('short_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($founders as $founder): ?>
            <tr>
                <td><?= $this->Number->format($founder->id) ?></td>
                <td><?= h($founder->title) ?></td>
                <td><?= h($founder->fname) ?></td>
                <td><?= h($founder->mname) ?></td>
                <td><?= h($founder->lname) ?></td>
                <td><?= h($founder->picture) ?></td>
                <td><?= $this->Number->format($founder->age) ?></td>
                <td><?= h($founder->short_description) ?></td>
                <td><?= h($founder->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $founder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $founder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $founder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $founder->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
