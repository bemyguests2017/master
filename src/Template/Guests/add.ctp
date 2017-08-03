<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Guests'), ['action' => 'index']) ?></li>
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
<div class="guests form large-9 medium-8 columns content">
    <?= $this->Form->create($guest) ?>
    <fieldset>
        <legend><?= __('Add Guest') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('fname');
            echo $this->Form->input('mname');
            echo $this->Form->input('lname');
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('passoword');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
