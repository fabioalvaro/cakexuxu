<?php
namespace App\Model\Table;

use App\Model\Entity\Kardex;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kardex Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tiposmovimentos
 * @property \Cake\ORM\Association\BelongsTo $Clifors
 * @property \Cake\ORM\Association\BelongsTo $Produtos
 * @property \Cake\ORM\Association\BelongsTo $Estoques
 */
class KardexTable extends Table
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

        $this->table('kardex');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tiposmovimentos', [
            'foreignKey' => 'tiposmovimento_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clifors', [
            'foreignKey' => 'clifor_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Produtos', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Estoques', [
            'foreignKey' => 'estoque_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('ativo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ativo');

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
        $rules->add($rules->existsIn(['tiposmovimento_id'], 'Tiposmovimentos'));
        $rules->add($rules->existsIn(['clifor_id'], 'Clifors'));
        $rules->add($rules->existsIn(['produto_id'], 'Produtos'));
        $rules->add($rules->existsIn(['estoque_id'], 'Estoques'));
        return $rules;
    }
}
