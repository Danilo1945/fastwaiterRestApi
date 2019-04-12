<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Calificacion Model
 *
 * @property \App\Model\Table\PedidoTable|\Cake\ORM\Association\BelongsTo $Pedido
 *
 * @method \App\Model\Entity\Calificacion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Calificacion newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Calificacion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Calificacion|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calificacion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Calificacion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Calificacion[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Calificacion findOrCreate($search, callable $callback = null, $options = [])
 */
class CalificacionTable extends Table
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

        $this->setTable('calificacion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->integer('valor')
            ->allowEmptyString('valor');

        $validator
            ->scalar('comentario')
            ->maxLength('comentario', 100)
            ->allowEmptyString('comentario');

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
        $rules->add($rules->existsIn(['pedido_id'], 'Pedido'));

        return $rules;
    }
}
