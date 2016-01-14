<?php
namespace App\Model\Table;

use App\Model\Entity\Estoque;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estoques Model
 *
 * @property \Cake\ORM\Association\HasMany $Kardexs
 */
class EstoquesTable extends Table
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

        $this->table('estoques');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Kardexs', [
            'foreignKey' => 'estoque_id'
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
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->add('active', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('active');

        return $validator;
    }
}
