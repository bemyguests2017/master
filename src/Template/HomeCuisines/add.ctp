<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Home Cuisines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cuisine Categories'), ['controller' => 'CuisineCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cuisine Category'), ['controller' => 'CuisineCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeCuisines form large-9 medium-8 columns content">
    <?= $this->Form->create($homeCuisine) ?>
    <fieldset>
        <legend><?= __('Add Home Cuisine') ?></legend>
        <?php
            echo $this->Form->input('cuisine_category_id', ['options' => $cuisineCategories]);
            echo $this->Form->input('home_id', ['options' => $homes]);
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
