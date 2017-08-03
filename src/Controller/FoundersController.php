<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Founders Controller
 *
 * @property \App\Model\Table\FoundersTable $Founders
 */
class FoundersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $founders = $this->paginate($this->Founders);

        $this->set(compact('founders'));
        $this->set('_serialize', ['founders']);
    }

    /**
     * View method
     *
     * @param string|null $id Founder id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $founder = $this->Founders->get($id, [
            'contain' => []
        ]);

        $this->set('founder', $founder);
        $this->set('_serialize', ['founder']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $founder = $this->Founders->newEntity();
        if ($this->request->is('post')) {
            $founder = $this->Founders->patchEntity($founder, $this->request->data);
            if ($this->Founders->save($founder)) {
                $this->Flash->success(__('The founder has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The founder could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('founder'));
        $this->set('_serialize', ['founder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Founder id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $founder = $this->Founders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $founder = $this->Founders->patchEntity($founder, $this->request->data);
            if ($this->Founders->save($founder)) {
                $this->Flash->success(__('The founder has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The founder could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('founder'));
        $this->set('_serialize', ['founder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Founder id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $founder = $this->Founders->get($id);
        if ($this->Founders->delete($founder)) {
            $this->Flash->success(__('The founder has been deleted.'));
        } else {
            $this->Flash->error(__('The founder could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
