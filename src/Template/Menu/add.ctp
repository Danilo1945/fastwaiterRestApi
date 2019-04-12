<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Menu $menu
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Menu'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Platillo'), ['controller' => 'Platillo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Platillo'), ['controller' => 'Platillo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalle Pedido'), ['controller' => 'DetallePedido', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menu form large-9 medium-8 columns content">
    <?= $this->Form->create($menu) ?>
    <fieldset>
        <legend><?= __('Add Menu') ?></legend>
        <?php
            echo $this->Form->control('fecha');
            echo $this->Form->control('disponible');
            echo $this->Form->control('categoria');
            echo $this->Form->control('platillo_id', ['options' => $platillo, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
