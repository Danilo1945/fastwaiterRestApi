<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calificacion[]|\Cake\Collection\CollectionInterface $calificacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Calificacion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="calificacion index large-9 medium-8 columns content">
    <h3><?= __('Calificacion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comentario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pedido_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($calificacion as $calificacion): ?>
            <tr>
                <td><?= $this->Number->format($calificacion->id) ?></td>
                <td><?= $this->Number->format($calificacion->valor) ?></td>
                <td><?= h($calificacion->comentario) ?></td>
                <td><?= $calificacion->has('pedido') ? $this->Html->link($calificacion->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $calificacion->pedido->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $calificacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $calificacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $calificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calificacion->id)]) ?>
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
