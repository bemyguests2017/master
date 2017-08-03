<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cuisine'), ['action' => 'edit', $cuisine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cuisine'), ['action' => 'delete', $cuisine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cuisine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cuisines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuisine'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Cuisines'), ['controller' => 'HomeCuisines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Cuisine'), ['controller' => 'HomeCuisines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cuisines view large-9 medium-8 columns content">
    <h3><?= h($cuisine->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($cuisine->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cuisine->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= $this->Number->format($cuisine->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($cuisine->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Cuisines') ?></h4>
        <?php if (!empty($cuisine->home_cuisines)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Id') ?></th>
                <th scope="col"><?= __('Cuisine Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cuisine->home_cuisines as $homeCuisines): ?>
            <tr>
                <td><?= h($homeCuisines->id) ?></td>
                <td><?= h($homeCuisines->home_id) ?></td>
                <td><?= h($homeCuisines->cuisine_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeCuisines', 'action' => 'view', $homeCuisines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeCuisines', 'action' => 'edit', $homeCuisines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeCuisines', 'action' => 'delete', $homeCuisines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeCuisines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
