<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Platillo $platillo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Platillo'), ['action' => 'edit', $platillo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Platillo'), ['action' => 'delete', $platillo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $platillo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Platillo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Platillo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="platillo view large-9 medium-8 columns content">
    <h3><?= h($platillo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Platillo') ?></th>
            <td><?= h($platillo->nombre_platillo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detalle') ?></th>
            <td><?= h($platillo->detalle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($platillo->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo Dir') ?></th>
            <td><?= h($platillo->photo_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($platillo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($platillo->precio) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Menu') ?></h4>
        <?php if (!empty($platillo->menu)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Disponible') ?></th>
                <th scope="col"><?= __('Categoria') ?></th>
                <th scope="col"><?= __('Platillo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($platillo->menu as $menu): ?>
            <tr>
                <td><?= h($menu->id) ?></td>
                <td><?= h($menu->fecha) ?></td>
                <td><?= h($menu->disponible) ?></td>
                <td><?= h($menu->categoria) ?></td>
                <td><?= h($menu->platillo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Menu', 'action' => 'view', $menu->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Menu', 'action' => 'edit', $menu->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Menu', 'action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
