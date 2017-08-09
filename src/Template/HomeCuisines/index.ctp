<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Home Cuisine'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cuisine Categories'), ['controller' => 'CuisineCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cuisine Category'), ['controller' => 'CuisineCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeCuisines index large-9 medium-8 columns content">
    <h3><?= __('Home Cuisines') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cuisine_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($homeCuisines as $homeCuisine): ?>
            <tr>
                <td><?= $this->Number->format($homeCuisine->id) ?></td>
                <td><?= $homeCuisine->has('cuisine_category') ? $this->Html->link($homeCuisine->cuisine_category->name, ['controller' => 'CuisineCategories', 'action' => 'view', $homeCuisine->cuisine_category->id]) : '' ?></td>
                <td><?= $homeCuisine->has('home') ? $this->Html->link($homeCuisine->home->name, ['controller' => 'Homes', 'action' => 'view', $homeCuisine->home->id]) : '' ?></td>
                <td><?= h($homeCuisine->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $homeCuisine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeCuisine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeCuisine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeCuisine->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
