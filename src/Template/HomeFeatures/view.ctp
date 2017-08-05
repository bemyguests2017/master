<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Home Feature'), ['action' => 'edit', $homeFeature->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Home Feature'), ['action' => 'delete', $homeFeature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeFeature->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Home Features'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Feature'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Homes'), ['controller' => 'Homes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home'), ['controller' => 'Homes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Features'), ['controller' => 'Features', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feature'), ['controller' => 'Features', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="homeFeatures view large-9 medium-8 columns content">
    <h3><?= h($homeFeature->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Home') ?></th>
            <td><?= $homeFeature->has('home') ? $this->Html->link($homeFeature->home->name, ['controller' => 'Homes', 'action' => 'view', $homeFeature->home->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feature') ?></th>
            <td><?= $homeFeature->has('feature') ? $this->Html->link($homeFeature->feature->name, ['controller' => 'Features', 'action' => 'view', $homeFeature->feature->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($homeFeature->id) ?></td>
        </tr>
    </table>
</div>
