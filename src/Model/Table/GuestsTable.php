<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Guests Model
 *
 * @property \Cake\ORM\Association\HasMany $BlacklistHomes
 * @property \Cake\ORM\Association\HasMany $GuestProfiles
 * @property \Cake\ORM\Association\HasMany $HomeRatings
 * @property \Cake\ORM\Association\HasMany $HomeReviews
 * @property \Cake\ORM\Association\HasMany $LoginLogs
 *
 * @method \App\Model\Entity\Guest get($primaryKey, $options = [])
 * @method \App\Model\Entity\Guest newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Guest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Guest|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Guest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Guest[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Guest findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GuestsTable extends Table
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

        $this->table('guests');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('BlacklistHomes', [
            'foreignKey' => 'guest_id'
        ]);
        $this->hasMany('GuestProfiles', [
            'foreignKey' => 'guest_id'
        ]);
        $this->hasMany('HomeRatings', [
            'foreignKey' => 'guest_id'
        ]);
        $this->hasMany('HomeReviews', [
            'foreignKey' => 'guest_id'
        ]);
        $this->hasMany('LoginLogs', [
            'foreignKey' => 'guest_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('fname', 'create')
            ->notEmpty('fname');

        $validator
            ->integer('mname')
            ->allowEmpty('mname');

        $validator
            ->integer('lname')
            ->requirePresence('lname', 'create')
            ->notEmpty('lname');

        $validator
            ->integer('username')
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('passoword', 'create')
            ->notEmpty('passoword');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
