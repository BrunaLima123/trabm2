<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $ID
 * @property string|null $NOME
 * @property string|null $CPF
 * @property \Cake\I18n\FrozenDate|null $DATA_NASCIMENTO
 * @property string|null $SENHA
 * @property string|null $LOGIN
 */
class Funcionario extends Entity
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
        'NOME' => true,
        'CPF' => true,
        'DATA_NASCIMENTO' => true,
        'SENHA' => true,
        'LOGIN' => true,
    ];
}
