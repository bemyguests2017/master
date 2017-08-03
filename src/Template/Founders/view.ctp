<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Founder'), ['action' => 'edit', $founder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Founder'), ['action' => 'delete', $founder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $founder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Founders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Founder'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="founders view large-9 medium-8 columns content">
    <h3><?= h($founder->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($founder->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($founder->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mname') ?></th>
            <td><?= h($founder->mname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lname') ?></th>
            <td><?= h($founder->lname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= h($founder->picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Short Description') ?></th>
            <td><?= h($founder->short_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($founder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($founder->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($founder->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($founder->description)); ?>
    </div>
</div>
