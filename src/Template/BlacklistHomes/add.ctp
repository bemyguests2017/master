<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Blacklist Homes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guests'), ['controller' => 'Guests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guest'), ['controller' => 'Guests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blacklistHomes form large-9 medium-8 columns content">
    <?= $this->Form->create($blacklistHome) ?>
    <fieldset>
        <legend><?= __('Add Blacklist Home') ?></legend>
        <?php
            echo $this->Form->input('home_id', ['options' => $homes]);
            echo $this->Form->input('guest_id', ['options' => $guests]);
            echo $this->Form->input('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
