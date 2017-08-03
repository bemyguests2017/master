<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BlacklistHomes Controller
 *
 * @property \App\Model\Table\BlacklistHomesTable $BlacklistHomes
 */
class BlacklistHomesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Homes', 'Guests']
        ];
        $blacklistHomes = $this->paginate($this->BlacklistHomes);

        $this->set(compact('blacklistHomes'));
        $this->set('_serialize', ['blacklistHomes']);
    }

    /**
     * View method
     *
     * @param string|null $id Blacklist Home id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blacklistHome = $this->BlacklistHomes->get($id, [
            'contain' => ['Homes', 'Guests']
        ]);

        $this->set('blacklistHome', $blacklistHome);
        $this->set('_serialize', ['blacklistHome']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blacklistHome = $this->BlacklistHomes->newEntity();
        if ($this->request->is('post')) {
            $blacklistHome = $this->BlacklistHomes->patchEntity($blacklistHome, $this->request->data);
            if ($this->BlacklistHomes->save($blacklistHome)) {
                $this->Flash->success(__('The blacklist home has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blacklist home could not be saved. Please, try again.'));
            }
        }
        $homes = $this->BlacklistHomes->Homes->find('list', ['limit' => 200]);
        $guests = $this->BlacklistHomes->Guests->find('list', ['limit' => 200]);
        $this->set(compact('blacklistHome', 'homes', 'guests'));
        $this->set('_serialize', ['blacklistHome']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Blacklist Home id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blacklistHome = $this->BlacklistHomes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blacklistHome = $this->BlacklistHomes->patchEntity($blacklistHome, $this->request->data);
            if ($this->BlacklistHomes->save($blacklistHome)) {
                $this->Flash->success(__('The blacklist home has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The blacklist home could not be saved. Please, try again.'));
            }
        }
        $homes = $this->BlacklistHomes->Homes->find('list', ['limit' => 200]);
        $guests = $this->BlacklistHomes->Guests->find('list', ['limit' => 200]);
        $this->set(compact('blacklistHome', 'homes', 'guests'));
        $this->set('_serialize', ['blacklistHome']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Blacklist Home id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blacklistHome = $this->BlacklistHomes->get($id);
        if ($this->BlacklistHomes->delete($blacklistHome)) {
            $this->Flash->success(__('The blacklist home has been deleted.'));
        } else {
            $this->Flash->error(__('The blacklist home could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
