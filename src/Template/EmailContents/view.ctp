<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Email Content'), ['action' => 'edit', $emailContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email Content'), ['action' => 'delete', $emailContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emailContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Email Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email Content'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emailContents view large-9 medium-8 columns content">
    <h3><?= h($emailContent->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emailContent->id) ?></td>
        </tr>
    </table>
</div>
