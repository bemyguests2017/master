<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BlacklistHomes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Homes
 * @property \Cake\ORM\Association\BelongsTo $Guests
 *
 * @method \App\Model\Entity\BlacklistHome get($primaryKey, $options = [])
 * @method \App\Model\Entity\BlacklistHome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BlacklistHome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BlacklistHome|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BlacklistHome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BlacklistHome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BlacklistHome findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BlacklistHomesTable extends Table
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

        $this->table('blacklist_homes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Homes', [
            'foreignKey' => 'home_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Guests', [
            'foreignKey' => 'guest_id',
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
            ->requirePresence('comment', 'create')
            ->notEmpty('comment');

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
        $rules->add($rules->existsIn(['home_id'], 'Homes'));
        $rules->add($rules->existsIn(['guest_id'], 'Guests'));

        return $rules;
    }
}
