<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmailContents Model
 *
 * @method \App\Model\Entity\EmailContent get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmailContent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmailContent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmailContent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailContent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmailContent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmailContent findOrCreate($search, callable $callback = null)
 */
class EmailContentsTable extends Table
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

        $this->table('email_contents');
        $this->displayField('id');
        $this->primaryKey('id');
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

        return $validator;
    }
}
