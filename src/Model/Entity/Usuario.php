<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string|null $nombres
 * @property string|null $apellidos
 * @property string|null $email
 * @property string|null $telefono
 * @property string|null $password
 * @property int|null $roles_id
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Pedido[] $pedido
 */
class Usuario extends Entity
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
        'nombres' => true,
        'apellidos' => true,
        'email' => true,
        'telefono' => true,
        'password' => true,
        'roles_id' => true,
        'role' => true,
        'pedido' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
