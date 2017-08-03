<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Guest'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blacklist Homes'), ['controller' => 'BlacklistHomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blacklist Home'), ['controller' => 'BlacklistHomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guest Profiles'), ['controller' => 'GuestProfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guest Profile'), ['controller' => 'GuestProfiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Ratings'), ['controller' => 'HomeRatings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Rating'), ['controller' => 'HomeRatings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Home Reviews'), ['controller' => 'HomeReviews', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Review'), ['controller' => 'HomeReviews', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Login Logs'), ['controller' => 'LoginLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Login Log'), ['controller' => 'LoginLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="guests index large-9 medium-8 columns content">
    <h3><?= __('Guests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('passoword') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guests as $guest): ?>
            <tr>
                <td><?= $this->Number->format($guest->id) ?></td>
                <td><?= h($guest->title) ?></td>
                <td><?= h($guest->fname) ?></td>
                <td><?= $this->Number->format($guest->mname) ?></td>
                <td><?= $this->Number->format($guest->lname) ?></td>
                <td><?= $this->Number->format($guest->username) ?></td>
                <td><?= $this->Number->format($guest->email) ?></td>
                <td><?= h($guest->passoword) ?></td>
                <td><?= h($guest->created) ?></td>
                <td><?= h($guest->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $guest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $guest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $guest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guest->id)]) ?>
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
