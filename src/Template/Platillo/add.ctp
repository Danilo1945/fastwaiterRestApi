<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Platillo $platillo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Platillo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="platillo form large-9 medium-8 columns content">
    <?= $this->Form->create($platillo) ?>
    <fieldset>
        <legend><?= __('Add Platillo') ?></legend>
        <?php
            echo $this->Form->control('nombre_platillo');
            echo $this->Form->control('detalle');
            echo $this->Form->control('photo');
            echo $this->Form->control('photo_dir');
            echo $this->Form->control('precio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
