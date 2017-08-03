<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Blacklist Home'), ['action' => 'edit', $blacklistHome->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Blacklist Home'), ['action' => 'delete', $blacklistHome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blacklistHome->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blacklist Homes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blacklist Home'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Guests'), ['controller' => 'Guests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guest'), ['controller' => 'Guests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blacklistHomes view large-9 medium-8 columns content">
    <h3><?= h($blacklistHome->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home') ?></th>
            <td><?= $blacklistHome->has('home') ? $this->Html->link($blacklistHome->home->name, ['controller' => 'Homes', 'action' => 'view', $blacklistHome->home->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Guest') ?></th>
            <td><?= $blacklistHome->has('guest') ? $this->Html->link($blacklistHome->guest->title, ['controller' => 'Guests', 'action' => 'view', $blacklistHome->guest->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blacklistHome->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($blacklistHome->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($blacklistHome->comment)); ?>
    </div>
</div>
