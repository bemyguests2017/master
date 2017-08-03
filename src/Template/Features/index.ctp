<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Features'), ['controller' => 'HomeFeatures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Feature'), ['controller' => 'HomeFeatures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="features index large-9 medium-8 columns content">
    <h3><?= __('Features') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($features as $feature): ?>
            <tr>
                <td><?= $this->Number->format($feature->id) ?></td>
                <td><?= h($feature->name) ?></td>
                <td><?= h($feature->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feature->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feature->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->id)]) ?>
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
