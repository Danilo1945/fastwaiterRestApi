<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calificacion Entity
 *
 * @property int $id
 * @property int|null $valor
 * @property string|null $comentario
 * @property int|null $pedido_id
 *
 * @property \App\Model\Entity\Pedido $pedido
 */
class Calificacion extends Entity
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
        'valor' => true,
        'comentario' => true,
        'pedido_id' => true,
        'pedido' => true
    ];
}
