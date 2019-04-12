<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mesa Model
 *
 * @property \App\Model\Table\DetallePedidoTable|\Cake\ORM\Association\HasMany $DetallePedido
 *
 * @method \App\Model\Entity\Mesa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mesa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mesa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mesa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mesa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mesa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mesa findOrCreate($search, callable $callback = null, $options = [])
 */
class MesaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('mesa');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('DetallePedido', [
            'foreignKey' => 'mesa_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->integer('capacidad_personas')
            ->allowEmptyString('capacidad_personas');

        $validator
            ->integer('numero_mesa')
            ->allowEmptyString('numero_mesa');

        $validator
            ->scalar('detalle')
            ->maxLength('detalle', 100)
            ->allowEmptyString('detalle');

        return $validator;
    }
}
