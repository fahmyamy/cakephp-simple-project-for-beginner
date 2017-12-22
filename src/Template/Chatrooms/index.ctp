<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chatroom[]|\Cake\Collection\CollectionInterface $chatrooms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chatroom'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chatrooms index large-9 medium-8 columns content">
    <h3><?= __('Chatrooms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chatlog') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chatrooms as $chatroom): ?>
            <tr>
                <td><?= $this->Number->format($chatroom->id) ?></td>
                <td><?= h($chatroom->chatlog) ?></td>
                <td><?= h($chatroom->description) ?></td>
                <td><?= h($chatroom->created) ?></td>
                <td><?= $chatroom->has('company') ? $this->Html->link($chatroom->company->name, ['controller' => 'Companies', 'action' => 'view', $chatroom->company->id]) : '' ?></td>
                <td><?= $chatroom->has('user') ? $this->Html->link($chatroom->user->id, ['controller' => 'Users', 'action' => 'view', $chatroom->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chatroom->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chatroom->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chatroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatroom->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
