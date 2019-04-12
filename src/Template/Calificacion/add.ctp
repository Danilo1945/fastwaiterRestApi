<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calificacion $calificacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Calificacion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calificacion form large-9 medium-8 columns content">
    <?= $this->Form->create($calificacion) ?>
    <fieldset>
        <legend><?= __('Add Calificacion') ?></legend>
        <?php
            echo $this->Form->control('valor');
            echo $this->Form->control('comentario');
            echo $this->Form->control('pedido_id', ['options' => $pedido, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
