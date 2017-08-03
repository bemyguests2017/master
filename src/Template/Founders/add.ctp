<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Founders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="founders form large-9 medium-8 columns content">
    <?= $this->Form->create($founder) ?>
    <fieldset>
        <legend><?= __('Add Founder') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('fname');
            echo $this->Form->input('mname');
            echo $this->Form->input('lname');
            echo $this->Form->input('picture');
            echo $this->Form->input('age');
            echo $this->Form->input('short_description');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
