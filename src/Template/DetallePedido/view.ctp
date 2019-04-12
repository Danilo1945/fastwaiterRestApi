<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallePedido $detallePedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detalle Pedido'), ['action' => 'edit', $detallePedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detalle Pedido'), ['action' => 'delete', $detallePedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallePedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Mesa'), ['controller' => 'Mesa', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mesa'), ['controller' => 'Mesa', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="detallePedido view large-9 medium-8 columns content">
    <h3><?= h($detallePedido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Menu') ?></th>
            <td><?= $detallePedido->has('menu') ? $this->Html->link($detallePedido->menu->id, ['controller' => 'Menu', 'action' => 'view', $detallePedido->menu->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mesa') ?></th>
            <td><?= $detallePedido->has('mesa') ? $this->Html->link($detallePedido->mesa->id, ['controller' => 'Mesa', 'action' => 'view', $detallePedido->mesa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedido') ?></th>
            <td><?= $detallePedido->has('pedido') ? $this->Html->link($detallePedido->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $detallePedido->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detallePedido->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Pediso') ?></th>
            <td><?= $this->Number->format($detallePedido->cantidad_pediso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Unitario') ?></th>
            <td><?= $this->Number->format($detallePedido->valor_unitario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Total') ?></th>
            <td><?= $this->Number->format($detallePedido->valor_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Iva') ?></th>
            <td><?= $this->Number->format($detallePedido->iva) ?></td>
        </tr>
    </table>
</div>
