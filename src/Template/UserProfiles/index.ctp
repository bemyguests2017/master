<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Profile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userProfiles index large-9 medium-8 columns content">
    <h3><?= __('User Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guest_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profile_picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userProfiles as $userProfile): ?>
            <tr>
                <td><?= $this->Number->format($userProfile->id) ?></td>
                <td><?= $this->Number->format($userProfile->guest_id) ?></td>
                <td><?= $this->Number->format($userProfile->phone) ?></td>
                <td><?= h($userProfile->profile_picture) ?></td>
                <td><?= h($userProfile->dob) ?></td>
                <td><?= h($userProfile->created) ?></td>
                <td><?= h($userProfile->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userProfile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userProfile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?>
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
