<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido[]|\Cake\Collection\CollectionInterface $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Calificacion'), ['controller' => 'Calificacion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Calificacion'), ['controller' => 'Calificacion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pedido index large-9 medium-8 columns content">
    <h3><?= __('Pedido') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_pedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pedido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedido as $pedido): ?>
            <tr>
                <td><?= $this->Number->format($pedido->id) ?></td>
                <td><?= h($pedido->estado_pedido) ?></td>
                <td><?= h($pedido->fecha_pedido) ?></td>
                <td><?= h($pedido->observacion) ?></td>
                <td><?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $pedido->usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
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
