<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HomeFeatures Controller
 *
 * @property \App\Model\Table\HomeFeaturesTable $HomeFeatures
 */
class HomeFeaturesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Homes', 'Features']
        ];
        $homeFeatures = $this->paginate($this->HomeFeatures);

        $this->set(compact('homeFeatures'));
        $this->set('_serialize', ['homeFeatures']);
    }

    /**
     * View method
     *
     * @param string|null $id Home Feature id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeFeature = $this->HomeFeatures->get($id, [
            'contain' => ['Homes', 'Features']
        ]);

        $this->set('homeFeature', $homeFeature);
        $this->set('_serialize', ['homeFeature']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeFeature = $this->HomeFeatures->newEntity();
        if ($this->request->is('post')) {
            $homeFeature = $this->HomeFeatures->patchEntity($homeFeature, $this->request->data);
            if ($this->HomeFeatures->save($homeFeature)) {
                $this->Flash->success(__('The home feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home feature could not be saved. Please, try again.'));
            }
        }
        $homes = $this->HomeFeatures->Homes->find('list', ['limit' => 200]);
        $features = $this->HomeFeatures->Features->find('list', ['limit' => 200]);
        $this->set(compact('homeFeature', 'homes', 'features'));
        $this->set('_serialize', ['homeFeature']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Feature id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeFeature = $this->HomeFeatures->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeFeature = $this->HomeFeatures->patchEntity($homeFeature, $this->request->data);
            if ($this->HomeFeatures->save($homeFeature)) {
                $this->Flash->success(__('The home feature has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home feature could not be saved. Please, try again.'));
            }
        }
        $homes = $this->HomeFeatures->Homes->find('list', ['limit' => 200]);
        $features = $this->HomeFeatures->Features->find('list', ['limit' => 200]);
        $this->set(compact('homeFeature', 'homes', 'features'));
        $this->set('_serialize', ['homeFeature']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Feature id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeFeature = $this->HomeFeatures->get($id);
        if ($this->HomeFeatures->delete($homeFeature)) {
            $this->Flash->success(__('The home feature has been deleted.'));
        } else {
            $this->Flash->error(__('The home feature could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
