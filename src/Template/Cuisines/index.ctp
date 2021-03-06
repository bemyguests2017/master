<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cuisine'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Cuisines'), ['controller' => 'HomeCuisines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Cuisine'), ['controller' => 'HomeCuisines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cuisines index large-9 medium-8 columns content">
    <h3><?= __('Cuisines') ?></h3>
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
            <?php foreach ($cuisines as $cuisine): ?>
            <tr>
                <td><?= $this->Number->format($cuisine->id) ?></td>
                <td><?= h($cuisine->name) ?></td>
                <td><?= $this->Number->format($cuisine->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cuisine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cuisine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cuisine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuisine->id)]) ?>
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
