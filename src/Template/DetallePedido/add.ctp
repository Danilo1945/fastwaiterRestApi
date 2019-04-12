<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallePedido $detallePedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mesa'), ['controller' => 'Mesa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mesa'), ['controller' => 'Mesa', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallePedido form large-9 medium-8 columns content">
    <?= $this->Form->create($detallePedido) ?>
    <fieldset>
        <legend><?= __('Add Detalle Pedido') ?></legend>
        <?php
            echo $this->Form->control('cantidad_pediso');
            echo $this->Form->control('valor_unitario');
            echo $this->Form->control('valor_total');
            echo $this->Form->control('iva');
            echo $this->Form->control('menu_id', ['options' => $menu, 'empty' => true]);
            echo $this->Form->control('mesa_id', ['options' => $mesa, 'empty' => true]);
            echo $this->Form->control('pedido_id', ['options' => $pedido, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
