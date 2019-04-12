<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mesa Entity
 *
 * @property int $id
 * @property int|null $capacidad_personas
 * @property int|null $numero_mesa
 * @property string|null $detalle
 *
 * @property \App\Model\Entity\DetallePedido[] $detalle_pedido
 */
class Mesa extends Entity
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
        'capacidad_personas' => true,
        'numero_mesa' => true,
        'detalle' => true,
        'detalle_pedido' => true
    ];
}
