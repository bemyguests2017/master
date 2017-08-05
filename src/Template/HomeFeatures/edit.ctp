<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $homeFeature->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homeFeature->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Home Features'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeFeatures form large-9 medium-8 columns content">
    <?= $this->Form->create($homeFeature) ?>
    <fieldset>
        <legend><?= __('Edit Home Feature') ?></legend>
        <?php
            echo $this->Form->input('home_id', ['options' => $homes]);
            echo $this->Form->input('feature_id', ['options' => $features]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
