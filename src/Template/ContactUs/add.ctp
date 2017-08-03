<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contact Us'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contactUs form large-9 medium-8 columns content">
    <?= $this->Form->create($contactU) ?>
    <fieldset>
        <legend><?= __('Add Contact U') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
