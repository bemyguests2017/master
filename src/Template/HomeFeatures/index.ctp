<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Home Feature'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeFeatures index large-9 medium-8 columns content">
    <h3><?= __('Home Features') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feature_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($homeFeatures as $homeFeature): ?>
            <tr>
                <td><?= $this->Number->format($homeFeature->id) ?></td>
                <td><?= $homeFeature->has('home') ? $this->Html->link($homeFeature->home->name, ['controller' => 'Homes', 'action' => 'view', $homeFeature->home->id]) : '' ?></td>
                <td><?= $homeFeature->has('feature') ? $this->Html->link($homeFeature->feature->name, ['controller' => 'Features', 'action' => 'view', $homeFeature->feature->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $homeFeature->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeFeature->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeFeature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeFeature->id)]) ?>
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
