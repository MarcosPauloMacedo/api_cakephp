<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $idade
 * @property string $email
 * @property string $telefone
 * @property int $status
 * @property int $idCurso
 * @property int $idEndereco
 */
class Aluno extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nome' => true,
        'idade' => true,
        'email' => true,
        'telefone' => true,
        'status' => true,
        'idCurso' => true,
        'idEndereco' => true,
    ];
}
