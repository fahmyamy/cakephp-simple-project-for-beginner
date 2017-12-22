<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producer[]|\Cake\Collection\CollectionInterface $producers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="producers index large-9 medium-8 columns content">
    <h3><?= __('Producers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($producers as $producer): ?>
            <tr>
                <td><?= $this->Number->format($producer->id) ?></td>
                <td><?= h($producer->name) ?></td>
                <td><?= $this->Number->format($producer->price) ?></td>
                <td><?= h($producer->picture) ?></td>
                <td><?= h($producer->created) ?></td>
                <td><?= h($producer->description) ?></td>
                <td><?= $producer->has('service') ? $this->Html->link($producer->service->name, ['controller' => 'Services', 'action' => 'view', $producer->service->id]) : '' ?></td>
                <td><?= $producer->has('company') ? $this->Html->link($producer->company->name, ['controller' => 'Companies', 'action' => 'view', $producer->company->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $producer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $producer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $producer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $producer->id)]) ?>
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
