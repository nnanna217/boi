<?php

namespace App\Model\Table;

use App\Model\Entity\Association;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Associations Model
 *
 */
class AssociationsTable extends Table {

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('associations');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->requirePresence('name', 'create')
                ->notEmpty('name');

        $validator
                ->allowEmpty('rc_number')
                ->add('rc_number', [
                    'unique' => [
                        'rule' => ['validateUnique', ['scope' => 'rc_number']],
                        'provider' => 'table',
                        'message' => 'The Specified RC_Number already exists'
                    ]
        ]);

        $validator
                ->date('date_of_formation')
                ->allowEmpty('date_of_formation');

        $validator
                ->requirePresence('address', 'create')
                ->notEmpty('address');

        $validator
                ->requirePresence('state', 'create')
                ->notEmpty('state');

        $validator
                ->requirePresence('lga', 'create')
                ->notEmpty('lga');

        $validator
                ->allowEmpty('ward');

        $validator
                ->allowEmpty('market');

        $validator
                ->allowEmpty('closest_landmark');

        $validator
                ->integer('no_of_members')
                ->allowEmpty('no_of_members');

        $validator
                ->requirePresence('category', 'create')
                ->notEmpty('category');

        $validator
                ->requirePresence('contact_phone', 'create')
                ->notEmpty('contact_phone');

        $validator
                ->allowEmpty('contact_email')
                ->add('email', 'validFormat', [
                    'rule' => 'email',
                    'message' => 'E-mail must be valid'
        ]);

        return $validator;
    }

}
