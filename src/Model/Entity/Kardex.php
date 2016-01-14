<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kardex Entity.
 *
 * @property int $id
 * @property \Cake\I18n\Time $created
 * @property int $tiposmovimento_id
 * @property \App\Model\Entity\Tiposmovimento $tiposmovimento
 * @property int $clifor_id
 * @property \App\Model\Entity\Clifor $clifor
 * @property int $produto_id
 * @property \App\Model\Entity\Produto $produto
 * @property int $estoque_id
 * @property \App\Model\Entity\Estoque $estoque
 * @property int $ativo
 */
class Kardex extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
