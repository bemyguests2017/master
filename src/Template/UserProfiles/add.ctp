<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Profiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userProfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($userProfile) ?>
    <fieldset>
        <legend><?= __('Add User Profile') ?></legend>
        <?php
            echo $this->Form->input('guest_id');
            echo $this->Form->input('phone');
            echo $this->Form->input('gender');
            echo $this->Form->input('marital_status');
            echo $this->Form->input('profile_picture');
            echo $this->Form->input('dob');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
