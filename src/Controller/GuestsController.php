<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Guests Controller
 *
 * @property \App\Model\Table\GuestsTable $Guests
 */
class GuestsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function register()
    {
        $this->viewBuilder()->layout('default2');

        $this->set(compact('guests'));
        $this->set('_serialize', ['guests']);
		// pr($this->request->data);die;
    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function login()
    {
        $this->viewBuilder()->layout('default2');

        $this->set(compact('guests'));
        $this->set('_serialize', ['guests']);
    }
    
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
        $guests = $this->paginate($this->Guests);

        $this->set(compact('guests'));
        $this->set('_serialize', ['guests']);
    }

    /**
     * View method
     *
     * @param string|null $id Guest id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $guest = $this->Guests->get($id, [
            'contain' => ['BlacklistHomes', 'GuestProfiles', 'HomeRatings', 'HomeReviews', 'LoginLogs']
        ]);

        $this->set('guest', $guest);
        $this->set('_serialize', ['guest']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guest = $this->Guests->newEntity();
        if ($this->request->is('post')) {
            $guest = $this->Guests->patchEntity($guest, $this->request->data);
            if ($this->Guests->save($guest)) {
                $this->Flash->success(__('The guest has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guest could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guest'));
        $this->set('_serialize', ['guest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Guest id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guest = $this->Guests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guest = $this->Guests->patchEntity($guest, $this->request->data);
            if ($this->Guests->save($guest)) {
                $this->Flash->success(__('The guest has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guest could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guest'));
        $this->set('_serialize', ['guest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Guest id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guest = $this->Guests->get($id);
        if ($this->Guests->delete($guest)) {
            $this->Flash->success(__('The guest has been deleted.'));
        } else {
            $this->Flash->error(__('The guest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
