<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HomeOwners Controller
 *
 * @property \App\Model\Table\HomeOwnersTable $HomeOwners
 */
class HomeOwnersController extends AppController
{

    
    public function register()
    {
        $this->viewBuilder()->layout('default2');

        
    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function login()
    {
        $this->viewBuilder()->layout('default2');
    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function profile()
    {
        $this->viewBuilder()->layout('default2');
    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $homeOwners = $this->paginate($this->HomeOwners);

        $this->set(compact('homeOwners'));
        $this->set('_serialize', ['homeOwners']);
    }

    /**
     * View method
     *
     * @param string|null $id Home Owner id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeOwner = $this->HomeOwners->get($id, [
            'contain' => ['HomeOwnerProfiles', 'Homes', 'LoginLogs']
        ]);

        $this->set('homeOwner', $homeOwner);
        $this->set('_serialize', ['homeOwner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeOwner = $this->HomeOwners->newEntity();
        if ($this->request->is('post')) {
            $homeOwner = $this->HomeOwners->patchEntity($homeOwner, $this->request->data);
            if ($this->HomeOwners->save($homeOwner)) {
                $this->Flash->success(__('The home owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home owner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('homeOwner'));
        $this->set('_serialize', ['homeOwner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Owner id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeOwner = $this->HomeOwners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeOwner = $this->HomeOwners->patchEntity($homeOwner, $this->request->data);
            if ($this->HomeOwners->save($homeOwner)) {
                $this->Flash->success(__('The home owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home owner could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('homeOwner'));
        $this->set('_serialize', ['homeOwner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Owner id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeOwner = $this->HomeOwners->get($id);
        if ($this->HomeOwners->delete($homeOwner)) {
            $this->Flash->success(__('The home owner has been deleted.'));
        } else {
            $this->Flash->error(__('The home owner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
