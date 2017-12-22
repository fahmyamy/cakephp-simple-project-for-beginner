<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chatroom $chatroom
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chatroom'), ['action' => 'edit', $chatroom->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chatroom'), ['action' => 'delete', $chatroom->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatroom->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chatrooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chatroom'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chatrooms view large-9 medium-8 columns content">
    <h3><?= h($chatroom->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Chatlog') ?></th>
            <td><?= h($chatroom->chatlog) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($chatroom->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $chatroom->has('company') ? $this->Html->link($chatroom->company->name, ['controller' => 'Companies', 'action' => 'view', $chatroom->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $chatroom->has('user') ? $this->Html->link($chatroom->user->username, ['controller' => 'Users', 'action' => 'view', $chatroom->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($chatroom->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($chatroom->created) ?></td>
        </tr>
    </table>
</div>
