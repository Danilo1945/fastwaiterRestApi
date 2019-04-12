<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prueba Model
 *
 * @method \App\Model\Entity\Prueba get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prueba newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prueba[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prueba|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prueba saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prueba patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prueba[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prueba findOrCreate($search, callable $callback = null, $options = [])
 */
class PruebaTable extends Table
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

        $this->setTable('prueba');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nombre')
            ->maxLength('nombre', 20)
            ->allowEmptyString('nombre');

        return $validator;
    }
}
