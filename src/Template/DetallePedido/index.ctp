<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallePedido[]|\Cake\Collection\CollectionInterface $detallePedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Mesa'), ['controller' => 'Mesa', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Mesa'), ['controller' => 'Mesa', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallePedido index large-9 medium-8 columns content">
    <h3><?= __('Detalle Pedido') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_pediso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_unitario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iva') ?></th>
                <th scope="col"><?= $this->Paginator->sort('menu_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mesa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedido_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detallePedido as $detallePedido): ?>
            <tr>
                <td><?= $this->Number->format($detallePedido->id) ?></td>
                <td><?= $this->Number->format($detallePedido->cantidad_pediso) ?></td>
                <td><?= $this->Number->format($detallePedido->valor_unitario) ?></td>
                <td><?= $this->Number->format($detallePedido->valor_total) ?></td>
                <td><?= $this->Number->format($detallePedido->iva) ?></td>
                <td><?= $detallePedido->has('menu') ? $this->Html->link($detallePedido->menu->id, ['controller' => 'Menu', 'action' => 'view', $detallePedido->menu->id]) : '' ?></td>
                <td><?= $detallePedido->has('mesa') ? $this->Html->link($detallePedido->mesa->id, ['controller' => 'Mesa', 'action' => 'view', $detallePedido->mesa->id]) : '' ?></td>
                <td><?= $detallePedido->has('pedido') ? $this->Html->link($detallePedido->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $detallePedido->pedido->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $detallePedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detallePedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detallePedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallePedido->id)]) ?>
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
