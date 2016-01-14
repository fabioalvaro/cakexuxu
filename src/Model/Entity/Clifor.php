<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Clifor Entity.
 *
 * @property int $id
 * @property string $nome
 * @property int $doc
 * @property int $tipodoc
 * @property int $tipoclifor
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property int $ativo
 * @property \App\Model\Entity\Kardex[] $kardexs
 */
class Clifor extends Entity
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
