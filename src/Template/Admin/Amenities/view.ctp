<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Amenity'), ['action' => 'edit', $amenity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Amenity'), ['action' => 'delete', $amenity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $amenity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Amenities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amenity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Amenities'), ['controller' => 'HomeAmenities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Amenity'), ['controller' => 'HomeAmenities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="amenities view large-9 medium-8 columns content">
    <h3><?= h($amenity->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($amenity->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($amenity->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($amenity->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($amenity->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Amenities') ?></h4>
        <?php if (!empty($amenity->home_amenities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Id') ?></th>
                <th scope="col"><?= __('Amenity Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($amenity->home_amenities as $homeAmenities): ?>
            <tr>
                <td><?= h($homeAmenities->id) ?></td>
                <td><?= h($homeAmenities->home_id) ?></td>
                <td><?= h($homeAmenities->amenity_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeAmenities', 'action' => 'view', $homeAmenities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeAmenities', 'action' => 'edit', $homeAmenities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeAmenities', 'action' => 'delete', $homeAmenities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeAmenities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
