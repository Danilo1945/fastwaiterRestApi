<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property int $id
 * @property string|null $fecha
 * @property bool|null $disponible
 * @property string|null $categoria
 * @property int|null $platillo_id
 *
 * @property \App\Model\Entity\Platillo $platillo
 * @property \App\Model\Entity\DetallePedido[] $detalle_pedido
 */
class Menu extends Entity
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
        'fecha' => true,
        'disponible' => true,
        'categoria' => true,
        'platillo_id' => true,
        'platillo' => true,
        'detalle_pedido' => true
    ];
}
