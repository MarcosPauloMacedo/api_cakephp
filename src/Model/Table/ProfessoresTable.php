<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Professores Model
 *
 * @method \App\Model\Entity\Professore newEmptyEntity()
 * @method \App\Model\Entity\Professore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Professore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Professore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Professore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Professore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Professore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Professore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Professore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Professore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Professore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Professore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Professore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProfessoresTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('professores');
        $this->setDisplayField(['id']);
        $this->setPrimaryKey(['id']);
    }
}
