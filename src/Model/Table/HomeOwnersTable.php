<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeOwners Model
 *
 * @property \Cake\ORM\Association\HasMany $HomeOwnerProfiles
 * @property \Cake\ORM\Association\HasMany $Homes
 * @property \Cake\ORM\Association\HasMany $LoginLogs
 *
 * @method \App\Model\Entity\HomeOwner get($primaryKey, $options = [])
 * @method \App\Model\Entity\HomeOwner newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HomeOwner[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HomeOwner|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomeOwner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HomeOwner[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HomeOwner findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HomeOwnersTable extends Table
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

        $this->table('home_owners');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('HomeOwnerProfiles', [
            'foreignKey' => 'home_owner_id'
        ]);
        $this->hasMany('Homes', [
            'foreignKey' => 'home_owner_id'
        ]);
        $this->hasMany('LoginLogs', [
            'foreignKey' => 'home_owner_id'
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
            ->requirePresence('mname', 'create')
            ->notEmpty('mname');

        $validator
            ->requirePresence('lname', 'create')
            ->notEmpty('lname');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

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
