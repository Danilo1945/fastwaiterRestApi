<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Platillo Model
 *
 * @property \App\Model\Table\MenuTable|\Cake\ORM\Association\HasMany $Menu
 *
 * @method \App\Model\Entity\Platillo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Platillo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Platillo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Platillo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Platillo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Platillo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Platillo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Platillo findOrCreate($search, callable $callback = null, $options = [])
 */
class PlatilloTable extends Table
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

        $this->setTable('platillo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Menu', [
            'foreignKey' => 'platillo_id'
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
            ->scalar('nombre_platillo')
            ->maxLength('nombre_platillo', 100)
            ->allowEmptyString('nombre_platillo');

        $validator
            ->scalar('detalle')
            ->maxLength('detalle', 100)
            ->allowEmptyString('detalle');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmptyString('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->allowEmptyString('photo_dir');

        $validator
            ->numeric('precio')
            ->allowEmptyString('precio');

        return $validator;
    }
}
