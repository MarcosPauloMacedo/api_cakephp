<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alunos Model
 *
 * @method \App\Model\Entity\Aluno newEmptyEntity()
 * @method \App\Model\Entity\Aluno newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AlunosTable extends Table
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

        $this->setTable('alunos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        
        $this->belongsTo('cursos', [
            'foreignKey' => 'idCurso',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('enderecos', [
            'foreignKey' => 'idEndereco',
            'joinType' => 'INNER'
        ]);
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
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('idade')
            ->requirePresence('idade', 'create')
            ->notEmptyString('idade');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 45)
            ->requirePresence('telefone', 'create')
            ->notEmptyString('telefone');

        $validator
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->integer('idCurso')
            ->requirePresence('idCurso', 'create')
            ->notEmptyString('idCurso');

        $validator
            ->integer('idEndereco')
            ->requirePresence('idEndereco', 'create')
            ->notEmptyString('idEndereco');

        return $validator;
    }

    public function getAlunosBasedStatus($status)
    {
        return $this->find('all')
        ->where(['status' => $status]);
    }

    public function getAlunosBasedCurso($id)
    {
        return $this->find('all')
        ->where(['idCurso' => $id]);
    }

    public function getAlunosAndAssociatedData()
    {
        return $this->find('all')
        ->contain(['cursos','enderecos']);
    }

    public function getAlunos()
    {
        return $this->find('all')
        ->select(['nome','idade','email','telefone','status']);
    }
}
