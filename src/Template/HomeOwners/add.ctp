<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Home Owners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Owner Profiles'), ['controller' => 'HomeOwnerProfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Owner Profile'), ['controller' => 'HomeOwnerProfiles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Login Logs'), ['controller' => 'LoginLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Login Log'), ['controller' => 'LoginLogs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeOwners form large-9 medium-8 columns content">
    <?= $this->Form->create($homeOwner) ?>
    <fieldset>
        <legend><?= __('Add Home Owner') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('fname');
            echo $this->Form->input('mname');
            echo $this->Form->input('lname');
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
