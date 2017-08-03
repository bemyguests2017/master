<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Email Contents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="emailContents form large-9 medium-8 columns content">
    <?= $this->Form->create($emailContent) ?>
    <fieldset>
        <legend><?= __('Add Email Content') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
