<?php
namespace App\Model\Table;

use App\Model\Entity\Clifor;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clifor Model
 *
 * @property \Cake\ORM\Association\HasMany $Kardex
 */
class CliforTable extends Table
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

        $this->table('clifor');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Kardex', [
            'foreignKey' => 'clifor_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->add('doc', 'valid', ['rule' => 'numeric'])
            ->requirePresence('doc', 'create')
            ->notEmpty('doc');

        $validator
            ->add('tipodoc', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tipodoc', 'create')
            ->notEmpty('tipodoc');

        $validator
            ->add('tipoclifor', 'valid', ['rule' => 'numeric'])
            ->requirePresence('tipoclifor', 'create')
            ->notEmpty('tipoclifor');

        $validator
            ->add('ativo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ativo');

        return $validator;
    }
}
