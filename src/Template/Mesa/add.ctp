<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mesa $mesa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mesa'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mesa form large-9 medium-8 columns content">
    <?= $this->Form->create($mesa) ?>
    <fieldset>
        <legend><?= __('Add Mesa') ?></legend>
        <?php
            echo $this->Form->control('capacidad_personas');
            echo $this->Form->control('numero_mesa');
            echo $this->Form->control('detalle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
