<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pedido Model
 *
 * @property \App\Model\Table\UsuarioTable|\Cake\ORM\Association\BelongsTo $Usuario
 * @property \App\Model\Table\CalificacionTable|\Cake\ORM\Association\HasMany $Calificacion
 * @property \App\Model\Table\DetallePedidoTable|\Cake\ORM\Association\HasMany $DetallePedido
 *
 * @method \App\Model\Entity\Pedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pedido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pedido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pedido findOrCreate($search, callable $callback = null, $options = [])
 */
class PedidoTable extends Table
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

        $this->setTable('pedido');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Usuario', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Calificacion', [
            'foreignKey' => 'pedido_id'
        ]);
        $this->hasMany('DetallePedido', [
            'foreignKey' => 'pedido_id'
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
            ->boolean('estado_pedido')
            ->allowEmptyString('estado_pedido');

        $validator
            ->scalar('fecha_pedido')
            ->maxLength('fecha_pedido', 15)
            ->allowEmptyString('fecha_pedido');

        $validator
            ->scalar('observacion')
            ->maxLength('observacion', 50)
            ->allowEmptyString('observacion');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['usuario_id'], 'Usuario'));

        return $rules;
    }
}
