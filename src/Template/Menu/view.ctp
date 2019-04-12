<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menu'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Platillo'), ['controller' => 'Platillo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="menu view large-9 medium-8 columns content">
    <h3><?= h($menu->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($menu->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($menu->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Platillo') ?></th>
            <td><?= $menu->has('platillo') ? $this->Html->link($menu->platillo->id, ['controller' => 'Platillo', 'action' => 'view', $menu->platillo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($menu->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disponible') ?></th>
            <td><?= $menu->disponible ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Detalle Pedido') ?></h4>
        <?php if (!empty($menu->detalle_pedido)): ?>
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
            <?php foreach ($menu->detalle_pedido as $detallePedido): ?>
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
