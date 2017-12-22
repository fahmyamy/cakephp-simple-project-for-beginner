<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Producer $producer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $producer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $producer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Producers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="producers form large-9 medium-8 columns content">
    <?= $this->Form->create($producer) ?>
    <fieldset>
        <legend><?= __('Edit Producer') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('price');
            echo $this->Form->control('picture');
            echo $this->Form->control('description');
            echo $this->Form->control('service_id', ['options' => $services]);
            echo $this->Form->control('company_id', ['options' => $companies]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
