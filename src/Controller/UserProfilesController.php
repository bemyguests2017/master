<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserProfiles Controller
 *
 * @property \App\Model\Table\UserProfilesTable $UserProfiles
 */
class UserProfilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Guests']
        ];
        $userProfiles = $this->paginate($this->UserProfiles);

        $this->set(compact('userProfiles'));
        $this->set('_serialize', ['userProfiles']);
    }

    /**
     * View method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userProfile = $this->UserProfiles->get($id, [
            'contain' => ['Guests']
        ]);

        $this->set('userProfile', $userProfile);
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userProfile = $this->UserProfiles->newEntity();
        if ($this->request->is('post')) {
            $userProfile = $this->UserProfiles->patchEntity($userProfile, $this->request->data);
            if ($this->UserProfiles->save($userProfile)) {
                $this->Flash->success(__('The user profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user profile could not be saved. Please, try again.'));
            }
        }
        $guests = $this->UserProfiles->Guests->find('list', ['limit' => 200]);
        $this->set(compact('userProfile', 'guests'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userProfile = $this->UserProfiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userProfile = $this->UserProfiles->patchEntity($userProfile, $this->request->data);
            if ($this->UserProfiles->save($userProfile)) {
                $this->Flash->success(__('The user profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user profile could not be saved. Please, try again.'));
            }
        }
        $guests = $this->UserProfiles->Guests->find('list', ['limit' => 200]);
        $this->set(compact('userProfile', 'guests'));
        $this->set('_serialize', ['userProfile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Profile id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userProfile = $this->UserProfiles->get($id);
        if ($this->UserProfiles->delete($userProfile)) {
            $this->Flash->success(__('The user profile has been deleted.'));
        } else {
            $this->Flash->error(__('The user profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
