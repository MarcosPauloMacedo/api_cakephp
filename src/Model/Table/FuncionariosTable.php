<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcionarios Model
 *
 * @method \App\Model\Entity\Funcionario newEmptyEntity()
 * @method \App\Model\Entity\Funcionario newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcionario findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Funcionario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Funcionario[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Funcionario[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Funcionario[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FuncionariosTable extends Table
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

        $this->setTable('funcionarios');
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
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 45)
            ->requirePresence('telefone', 'create')
            ->notEmptyString('telefone');

        $validator
            ->scalar('ctps')
            ->maxLength('ctps', 45)
            ->requirePresence('ctps', 'create')
            ->notEmptyString('ctps');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 45)
            ->requirePresence('cpf', 'create')
            ->notEmptyString('cpf');

        $validator
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }

    public function getFuncionariosBasedStatus($status)
    {
        return $this->find('all')
        ->where(['status' => $status]);
    }
}
