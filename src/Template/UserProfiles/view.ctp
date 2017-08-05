<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Profile'), ['action' => 'edit', $userProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Profile'), ['action' => 'delete', $userProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Profile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userProfiles view large-9 medium-8 columns content">
    <h3><?= h($userProfile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Profile Picture') ?></th>
            <td><?= h($userProfile->profile_picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userProfile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Guest Id') ?></th>
            <td><?= $this->Number->format($userProfile->guest_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= $this->Number->format($userProfile->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($userProfile->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userProfile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userProfile->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Gender') ?></h4>
        <?= $this->Text->autoParagraph(h($userProfile->gender)); ?>
    </div>
    <div class="row">
        <h4><?= __('Marital Status') ?></h4>
        <?= $this->Text->autoParagraph(h($userProfile->marital_status)); ?>
    </div>
</div>
