<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chatrooms'), ['controller' => 'Chatrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chatroom'), ['controller' => 'Chatrooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Producers'), ['controller' => 'Producers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producer'), ['controller' => 'Producers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($company->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($company->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($company->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($company->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $company->has('user') ? $this->Html->link($company->user->id, ['controller' => 'Users', 'action' => 'view', $company->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Chatrooms') ?></h4>
        <?php if (!empty($company->chatrooms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Chatlog') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->chatrooms as $chatrooms): ?>
            <tr>
                <td><?= h($chatrooms->id) ?></td>
                <td><?= h($chatrooms->chatlog) ?></td>
                <td><?= h($chatrooms->description) ?></td>
                <td><?= h($chatrooms->created) ?></td>
                <td><?= h($chatrooms->company_id) ?></td>
                <td><?= h($chatrooms->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Chatrooms', 'action' => 'view', $chatrooms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Chatrooms', 'action' => 'edit', $chatrooms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chatrooms', 'action' => 'delete', $chatrooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatrooms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Producers') ?></h4>
        <?php if (!empty($company->producers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Picture') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->producers as $producers): ?>
            <tr>
                <td><?= h($producers->id) ?></td>
                <td><?= h($producers->name) ?></td>
                <td><?= h($producers->price) ?></td>
                <td><?= h($producers->picture) ?></td>
                <td><?= h($producers->created) ?></td>
                <td><?= h($producers->description) ?></td>
                <td><?= h($producers->service_id) ?></td>
                <td><?= h($producers->company_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Producers', 'action' => 'view', $producers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Producers', 'action' => 'edit', $producers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Producers', 'action' => 'delete', $producers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
