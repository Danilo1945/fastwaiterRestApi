<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Platillo Entity
 *
 * @property int $id
 * @property string|null $nombre_platillo
 * @property string|null $detalle
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property float|null $precio
 *
 * @property \App\Model\Entity\Menu[] $menu
 */
class Platillo extends Entity
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
        'nombre_platillo' => true,
        'detalle' => true,
        'photo' => true,
        'photo_dir' => true,
        'precio' => true,
        'menu' => true
    ];
}
