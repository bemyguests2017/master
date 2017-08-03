<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Homes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $HomeOwners
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\HasMany $BlacklistHomes
 * @property \Cake\ORM\Association\HasMany $HomeAmenities
 * @property \Cake\ORM\Association\HasMany $HomeCuisines
 * @property \Cake\ORM\Association\HasMany $HomeFeatures
 * @property \Cake\ORM\Association\HasMany $HomeImages
 * @property \Cake\ORM\Association\HasMany $HomeMembers
 * @property \Cake\ORM\Association\HasMany $HomeRatings
 * @property \Cake\ORM\Association\HasMany $HomeReviews
 *
 * @method \App\Model\Entity\Home get($primaryKey, $options = [])
 * @method \App\Model\Entity\Home newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Home[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Home|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Home patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Home[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Home findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HomesTable extends Table
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

        $this->table('homes');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('HomeOwners', [
            'foreignKey' => 'home_owner_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('BlacklistHomes', [
            'foreignKey' => 'home_id'
        ]);
        $this->hasMany('HomeAmenities', [
            'foreignKey' => 'home_id'
        ]);
        $this->hasMany('HomeCuisines', [
            'foreignKey' => 'home_id'
        ]);
        $this->hasMany('HomeFeatures', [
            'foreignKey' => 'home_id'
        ]);
        $this->hasMany('HomeImages', [
            'foreignKey' => 'home_id'
        ]);
        $this->hasMany('HomeMembers', [
            'foreignKey' => 'home_id'
        ]);
        $this->hasMany('HomeRatings', [
            'foreignKey' => 'home_id'
        ]);
        $this->hasMany('HomeReviews', [
            'foreignKey' => 'home_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('max_guests')
            ->requirePresence('max_guests', 'create')
            ->notEmpty('max_guests');
        
        $validator
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

        $validator
            ->integer('landline')
            ->allowEmpty('landline');

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
        $rules->add($rules->existsIn(['home_owner_id'], 'HomeOwners'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));

        return $rules;
    }
}
