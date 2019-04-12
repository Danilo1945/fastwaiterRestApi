<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['controller' => 'Pedido', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedido', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuario view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($usuario->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($usuario->apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($usuario->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $usuario->has('role') ? $this->Html->link($usuario->role->id, ['controller' => 'Roles', 'action' => 'view', $usuario->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pedido') ?></h4>
        <?php if (!empty($usuario->pedido)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Estado Pedido') ?></th>
                <th scope="col"><?= __('Fecha Pedido') ?></th>
                <th scope="col"><?= __('Observacion') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->pedido as $pedido): ?>
            <tr>
                <td><?= h($pedido->id) ?></td>
                <td><?= h($pedido->estado_pedido) ?></td>
                <td><?= h($pedido->fecha_pedido) ?></td>
                <td><?= h($pedido->observacion) ?></td>
                <td><?= h($pedido->usuario_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pedido', 'action' => 'view', $pedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pedido', 'action' => 'edit', $pedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedido', 'action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
