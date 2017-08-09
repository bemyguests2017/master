<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Home Cuisine'), ['action' => 'edit', $homeCuisine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Home Cuisine'), ['action' => 'delete', $homeCuisine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeCuisine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Home Cuisines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Cuisine'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cuisine Categories'), ['controller' => 'CuisineCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cuisine Category'), ['controller' => 'CuisineCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="homeCuisines view large-9 medium-8 columns content">
    <h3><?= h($homeCuisine->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cuisine Category') ?></th>
            <td><?= $homeCuisine->has('cuisine_category') ? $this->Html->link($homeCuisine->cuisine_category->name, ['controller' => 'CuisineCategories', 'action' => 'view', $homeCuisine->cuisine_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home') ?></th>
            <td><?= $homeCuisine->has('home') ? $this->Html->link($homeCuisine->home->name, ['controller' => 'Homes', 'action' => 'view', $homeCuisine->home->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($homeCuisine->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($homeCuisine->id) ?></td>
        </tr>
    </table>
</div>
