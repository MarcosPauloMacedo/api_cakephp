<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Disciplinas Model
 *
 * @method \App\Model\Entity\Disciplina newEmptyEntity()
 * @method \App\Model\Entity\Disciplina newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Disciplina findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Disciplina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Disciplina|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disciplina saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Disciplina[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disciplina[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disciplina[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Disciplina[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DisciplinasTable extends Table
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

        $this->setTable('disciplinas');
        $this->setDisplayField(['id']);
        $this->setPrimaryKey(['id']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('idCurso')
            ->requirePresence('idCurso', 'create')
            ->notEmptyString('idCurso');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        return $validator;
    }
}
