<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calificacion'), ['controller' => 'Calificacion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calificacion'), ['controller' => 'Calificacion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedido form large-9 medium-8 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Add Pedido') ?></legend>
        <?php
            echo $this->Form->control('estado_pedido');
            echo $this->Form->control('fecha_pedido');
            echo $this->Form->control('observacion');
            echo $this->Form->control('usuario_id', ['options' => $usuario, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
