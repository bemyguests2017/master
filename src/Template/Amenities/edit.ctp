<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $amenity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $amenity->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Amenities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Home Amenities'), ['controller' => 'HomeAmenities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home Amenity'), ['controller' => 'HomeAmenities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="amenities form large-9 medium-8 columns content">
    <?= $this->Form->create($amenity) ?>
    <fieldset>
        <legend><?= __('Edit Amenity') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
