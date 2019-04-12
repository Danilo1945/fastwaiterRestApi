<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DetallePedido Entity
 *
 * @property int $id
 * @property int|null $cantidad_pediso
 * @property float|null $valor_unitario
 * @property float|null $valor_total
 * @property float|null $iva
 * @property int|null $menu_id
 * @property int|null $mesa_id
 * @property int|null $pedido_id
 *
 * @property \App\Model\Entity\Menu $menu
 * @property \App\Model\Entity\Mesa $mesa
 * @property \App\Model\Entity\Pedido $pedido
 */
class DetallePedido extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cantidad_pediso' => true,
        'valor_unitario' => true,
        'valor_total' => true,
        'iva' => true,
        'menu_id' => true,
        'mesa_id' => true,
        'pedido_id' => true,
        'menu' => true,
        'mesa' => true,
        'pedido' => true
    ];
}
