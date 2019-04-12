<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Calificacion'), ['controller' => 'Calificacion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calificacion'), ['controller' => 'Calificacion', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedido view large-9 medium-8 columns content">
    <h3><?= h($pedido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fecha Pedido') ?></th>
            <td><?= h($pedido->fecha_pedido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacion') ?></th>
            <td><?= h($pedido->observacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $pedido->has('usuario') ? $this->Html->link($pedido->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $pedido->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedido->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Pedido') ?></th>
            <td><?= $pedido->estado_pedido ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Calificacion') ?></h4>
        <?php if (!empty($pedido->calificacion)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col"><?= __('Comentario') ?></th>
                <th scope="col"><?= __('Pedido Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->calificacion as $calificacion): ?>
            <tr>
                <td><?= h($calificacion->id) ?></td>
                <td><?= h($calificacion->valor) ?></td>
                <td><?= h($calificacion->comentario) ?></td>
                <td><?= h($calificacion->pedido_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Calificacion', 'action' => 'view', $calificacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Calificacion', 'action' => 'edit', $calificacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Calificacion', 'action' => 'delete', $calificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calificacion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Detalle Pedido') ?></h4>
        <?php if (!empty($pedido->detalle_pedido)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cantidad Pediso') ?></th>
                <th scope="col"><?= __('Valor Unitario') ?></th>
                <th scope="col"><?= __('Valor Total') ?></th>
                <th scope="col"><?= __('Iva') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Mesa Id') ?></th>
                <th scope="col"><?= __('Pedido Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->detalle_pedido as $detallePedido): ?>
            <tr>
                <td><?= h($detallePedido->id) ?></td>
                <td><?= h($detallePedido->cantidad_pediso) ?></td>
                <td><?= h($detallePedido->valor_unitario) ?></td>
                <td><?= h($detallePedido->valor_total) ?></td>
                <td><?= h($detallePedido->iva) ?></td>
                <td><?= h($detallePedido->menu_id) ?></td>
                <td><?= h($detallePedido->mesa_id) ?></td>
                <td><?= h($detallePedido->pedido_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DetallePedido', 'action' => 'view', $detallePedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DetallePedido', 'action' => 'edit', $detallePedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DetallePedido', 'action' => 'delete', $detallePedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallePedido->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
