<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu[]|\Cake\Collection\CollectionInterface $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Platillo'), ['controller' => 'Platillo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menu index large-9 medium-8 columns content">
    <h3><?= __('Menu') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disponible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('platillo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu as $menu): ?>
            <tr>
                <td><?= $this->Number->format($menu->id) ?></td>
                <td><?= h($menu->fecha) ?></td>
                <td><?= h($menu->disponible) ?></td>
                <td><?= h($menu->categoria) ?></td>
                <td><?= $menu->has('platillo') ? $this->Html->link($menu->platillo->id, ['controller' => 'Platillo', 'action' => 'view', $menu->platillo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $menu->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $menu->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?>
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
