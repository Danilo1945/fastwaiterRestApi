<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id
 * @property bool|null $estado_pedido
 * @property string|null $fecha_pedido
 * @property string|null $observacion
 * @property int|null $usuario_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Calificacion[] $calificacion
 * @property \App\Model\Entity\DetallePedido[] $detalle_pedido
 */
class Pedido extends Entity
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
        'estado_pedido' => true,
        'fecha_pedido' => true,
        'observacion' => true,
        'usuario_id' => true,
        'usuario' => true,
        'calificacion' => true,
        'detalle_pedido' => true
    ];
}
