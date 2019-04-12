<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Platillo[]|\Cake\Collection\CollectionInterface $platillo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Platillo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu'), ['controller' => 'Menu', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menu', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="platillo index large-9 medium-8 columns content">
    <h3><?= __('Platillo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_platillo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('detalle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($platillo as $platillo): ?>
            <tr>
                <td><?= $this->Number->format($platillo->id) ?></td>
                <td><?= h($platillo->nombre_platillo) ?></td>
                <td><?= h($platillo->detalle) ?></td>
                <td><?= h($platillo->photo) ?></td>
                <td><?= h($platillo->photo_dir) ?></td>
                <td><?= $this->Number->format($platillo->precio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $platillo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $platillo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $platillo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $platillo->id)]) ?>
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
