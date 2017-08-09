<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HomeCuisines Controller
 *
 * @property \App\Model\Table\HomeCuisinesTable $HomeCuisines
 */
class HomeCuisinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['CuisineCategories', 'Homes']
        ];
        $homeCuisines = $this->paginate($this->HomeCuisines);

        $this->set(compact('homeCuisines'));
        $this->set('_serialize', ['homeCuisines']);
    }

    /**
     * View method
     *
     * @param string|null $id Home Cuisine id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeCuisine = $this->HomeCuisines->get($id, [
            'contain' => ['CuisineCategories', 'Homes']
        ]);

        $this->set('homeCuisine', $homeCuisine);
        $this->set('_serialize', ['homeCuisine']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeCuisine = $this->HomeCuisines->newEntity();
        if ($this->request->is('post')) {
            $homeCuisine = $this->HomeCuisines->patchEntity($homeCuisine, $this->request->data);
            if ($this->HomeCuisines->save($homeCuisine)) {
                $this->Flash->success(__('The home cuisine has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home cuisine could not be saved. Please, try again.'));
            }
        }
        $cuisineCategories = $this->HomeCuisines->CuisineCategories->find('list', ['limit' => 200]);
        $homes = $this->HomeCuisines->Homes->find('list', ['limit' => 200]);
        $this->set(compact('homeCuisine', 'cuisineCategories', 'homes'));
        $this->set('_serialize', ['homeCuisine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Cuisine id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeCuisine = $this->HomeCuisines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeCuisine = $this->HomeCuisines->patchEntity($homeCuisine, $this->request->data);
            if ($this->HomeCuisines->save($homeCuisine)) {
                $this->Flash->success(__('The home cuisine has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The home cuisine could not be saved. Please, try again.'));
            }
        }
        $cuisineCategories = $this->HomeCuisines->CuisineCategories->find('list', ['limit' => 200]);
        $homes = $this->HomeCuisines->Homes->find('list', ['limit' => 200]);
        $this->set(compact('homeCuisine', 'cuisineCategories', 'homes'));
        $this->set('_serialize', ['homeCuisine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Cuisine id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeCuisine = $this->HomeCuisines->get($id);
        if ($this->HomeCuisines->delete($homeCuisine)) {
            $this->Flash->success(__('The home cuisine has been deleted.'));
        } else {
            $this->Flash->error(__('The home cuisine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
