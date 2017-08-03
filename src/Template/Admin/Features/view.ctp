<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feature'), ['action' => 'edit', $feature->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feature'), ['action' => 'delete', $feature->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feature->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Features'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feature'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Home Features'), ['controller' => 'HomeFeatures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Feature'), ['controller' => 'HomeFeatures', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="features view large-9 medium-8 columns content">
    <h3><?= h($feature->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($feature->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($feature->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($feature->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($feature->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Home Features') ?></h4>
        <?php if (!empty($feature->home_features)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Home Id') ?></th>
                <th scope="col"><?= __('Feature Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($feature->home_features as $homeFeatures): ?>
            <tr>
                <td><?= h($homeFeatures->id) ?></td>
                <td><?= h($homeFeatures->home_id) ?></td>
                <td><?= h($homeFeatures->feature_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HomeFeatures', 'action' => 'view', $homeFeatures->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HomeFeatures', 'action' => 'edit', $homeFeatures->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HomeFeatures', 'action' => 'delete', $homeFeatures->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeFeatures->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
