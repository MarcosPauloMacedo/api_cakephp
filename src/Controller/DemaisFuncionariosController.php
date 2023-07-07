<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * DemaisFuncionarios Controller
 *
 * @property \App\Model\Table\DemaisFuncionariosTable $DemaisFuncionarios
 * @method \App\Model\Entity\DemaisFuncionario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemaisFuncionariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $demaisFuncionarios = $this->paginate($this->DemaisFuncionarios);

        $this->set(compact('demaisFuncionarios'));
        $this->viewBuilder()->setOption('serialize','demaisFuncionarios');  
    }

    /**
     * View method
     *
     * @param string|null $id Demais Funcionario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demaisFuncionario = $this->DemaisFuncionarios->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('demaisFuncionario'));
        $this->viewBuilder()->setOption('serialize','demaisFuncionario');  
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demaisFuncionario = $this->DemaisFuncionarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $demaisFuncionario = $this->DemaisFuncionarios->patchEntity($demaisFuncionario, $this->request->getData());
            if ($this->DemaisFuncionarios->save($demaisFuncionario)) {
                $this->Flash->success(__('The demais funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demais funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('demaisFuncionario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demais Funcionario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demaisFuncionario = $this->DemaisFuncionarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demaisFuncionario = $this->DemaisFuncionarios->patchEntity($demaisFuncionario, $this->request->getData());
            if ($this->DemaisFuncionarios->save($demaisFuncionario)) {
                $this->Flash->success(__('The demais funcionario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demais funcionario could not be saved. Please, try again.'));
        }
        $this->set(compact('demaisFuncionario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demais Funcionario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demaisFuncionario = $this->DemaisFuncionarios->get($id);
        if ($this->DemaisFuncionarios->delete($demaisFuncionario)) {
            $this->Flash->success(__('The demais funcionario has been deleted.'));
        } else {
            $this->Flash->error(__('The demais funcionario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
