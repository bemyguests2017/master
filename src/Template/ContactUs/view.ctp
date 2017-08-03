<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact U'), ['action' => 'edit', $contactU->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact U'), ['action' => 'delete', $contactU->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactU->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contact Us'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact U'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactUs view large-9 medium-8 columns content">
    <h3><?= h($contactU->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactU->id) ?></td>
        </tr>
    </table>
</div>
