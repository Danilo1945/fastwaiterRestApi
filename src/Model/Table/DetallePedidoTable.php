<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DetallePedido Model
 *
 * @property \App\Model\Table\MenuTable|\Cake\ORM\Association\BelongsTo $Menu
 * @property \App\Model\Table\MesaTable|\Cake\ORM\Association\BelongsTo $Mesa
 * @property \App\Model\Table\PedidoTable|\Cake\ORM\Association\BelongsTo $Pedido
 *
 * @method \App\Model\Entity\DetallePedido get($primaryKey, $options = [])
 * @method \App\Model\Entity\DetallePedido newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DetallePedido[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DetallePedido|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetallePedido saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetallePedido patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DetallePedido[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DetallePedido findOrCreate($search, callable $callback = null, $options = [])
 */
class DetallePedidoTable extends Table
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

        $this->setTable('detalle_pedido');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Menu', [
            'foreignKey' => 'menu_id'
        ]);
        $this->belongsTo('Mesa', [
            'foreignKey' => 'mesa_id'
        ]);
        $this->belongsTo('Pedido', [
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
            ->integer('cantidad_pediso')
            ->allowEmptyString('cantidad_pediso');

        $validator
            ->numeric('valor_unitario')
            ->allowEmptyString('valor_unitario');

        $validator
            ->numeric('valor_total')
            ->allowEmptyString('valor_total');

        $validator
            ->numeric('iva')
            ->allowEmptyString('iva');

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
        $rules->add($rules->existsIn(['menu_id'], 'Menu'));
        $rules->add($rules->existsIn(['mesa_id'], 'Mesa'));
        $rules->add($rules->existsIn(['pedido_id'], 'Pedido'));

        return $rules;
    }
}
