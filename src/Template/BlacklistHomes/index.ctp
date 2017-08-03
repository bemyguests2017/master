<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Blacklist Home'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guests'), ['controller' => 'Guests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guest'), ['controller' => 'Guests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blacklistHomes index large-9 medium-8 columns content">
    <h3><?= __('Blacklist Homes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guest_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blacklistHomes as $blacklistHome): ?>
            <tr>
                <td><?= $this->Number->format($blacklistHome->id) ?></td>
                <td><?= $blacklistHome->has('home') ? $this->Html->link($blacklistHome->home->name, ['controller' => 'Homes', 'action' => 'view', $blacklistHome->home->id]) : '' ?></td>
                <td><?= $blacklistHome->has('guest') ? $this->Html->link($blacklistHome->guest->title, ['controller' => 'Guests', 'action' => 'view', $blacklistHome->guest->id]) : '' ?></td>
                <td><?= h($blacklistHome->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blacklistHome->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blacklistHome->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blacklistHome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blacklistHome->id)]) ?>
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
