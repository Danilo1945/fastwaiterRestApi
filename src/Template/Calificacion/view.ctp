<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Calificacion $calificacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Calificacion'), ['action' => 'edit', $calificacion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Calificacion'), ['action' => 'delete', $calificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $calificacion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Calificacion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Calificacion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="calificacion view large-9 medium-8 columns content">
    <h3><?= h($calificacion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($calificacion->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pedido') ?></th>
            <td><?= $calificacion->has('pedido') ? $this->Html->link($calificacion->pedido->id, ['controller' => 'Pedido', 'action' => 'view', $calificacion->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($calificacion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($calificacion->valor) ?></td>
        </tr>
    </table>
</div>
