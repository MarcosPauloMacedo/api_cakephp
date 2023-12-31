<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\View\JsonView;

/**
 * Funcionarios Controller
 *
 * @property \App\Model\Table\FuncionariosTable $Funcionarios
 * @method \App\Model\Entity\Funcionario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FuncionariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $funcionarios = $this->paginate($this->Funcionarios->getFunctionarios());

        $this->set(compact('funcionarios'));
        $this->viewBuilder()->setOption('serialize','funcionarios');  
    }

    /**
     * View method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('funcionario'));
        $this->viewBuilder()->setOption('serialize','funcionario');  
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $funcionario = $this->Funcionarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->getData());
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('The funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('funcionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionarios->get($id);
        if ($this->Funcionarios->delete($funcionario)) {
            $this->Flash->success(__('The funcionario has been deleted.'));
        } else {
            $this->Flash->error(__('The funcionario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    public function funcionariosInactive()
    {
        $funcionariosInactive = $this->Funcionarios->getFuncionariosBasedStatus(statusENUM::INATIVO);

        $this->set(compact('funcionariosInactive'));
        $this->viewBuilder()->setOption('serialize','funcionariosInactive');  
    }

    public function funcionariosActive()
    {
        $funcionariosActive = $this->Funcionarios->getFuncionariosBasedStatus(statusENUM::ATIVO);

        $this->set(compact('funcionariosActive'));
        $this->viewBuilder()->setOption('serialize','funcionariosInactive');  
    }

    public function funcionariosAndEnderecos()
    {
        $funcionariosAndEnderecos = $this->Funcionarios->getFuncionariosAndEnderecos();

        $this->set(compact('funcionariosAndEnderecos'));
        $this->viewBuilder()->setOption('serialize','funcionariosAndEnderecos');  
    }
}
