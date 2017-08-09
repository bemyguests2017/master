<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeCuisines Model
 *
 * @property \Cake\ORM\Association\BelongsTo $CuisineCategories
 * @property \Cake\ORM\Association\BelongsTo $Homes
 *
 * @method \App\Model\Entity\HomeCuisine get($primaryKey, $options = [])
 * @method \App\Model\Entity\HomeCuisine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HomeCuisine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HomeCuisine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomeCuisine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HomeCuisine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HomeCuisine findOrCreate($search, callable $callback = null)
 */
class HomeCuisinesTable extends Table
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

        $this->table('home_cuisines');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('CuisineCategories', [
            'foreignKey' => 'cuisine_category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Homes', [
            'foreignKey' => 'home_id',
            'joinType' => 'INNER'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

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
        $rules->add($rules->existsIn(['cuisine_category_id'], 'CuisineCategories'));
        $rules->add($rules->existsIn(['home_id'], 'Homes'));

        return $rules;
    }
}
