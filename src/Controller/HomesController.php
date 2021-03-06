<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Forms Controller
 *
 * @property \App\Model\Table\FormsTable $Forms
 */
class HomesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->viewBuilder()->layout('default2');
        $countries = \Cake\ORM\TableRegistry::get('Countries')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $states = \Cake\ORM\TableRegistry::get('States')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $cities = \Cake\ORM\TableRegistry::get('Cities')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $amenities = \Cake\ORM\TableRegistry::get('Amenities')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $features = \Cake\ORM\TableRegistry::get('Features')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $cuisines = \Cake\ORM\TableRegistry::get('Cuisines')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        
        if ($this->request->is('post')) {
  
           
            $this->request->data = ["name" => "rafvi", "max_guests" => "1", "mobile" => "111111111111111", "landline"=>"11111111",
                "home_amenities" => ["0" => ['amenity_id' => '1'], "1" => ['amenity_id' => '2'], "2" => ['amenity_id' => '3']],
                "home_features" => ["0" => ['feature_id' => '1'], "1" => ['feature_id' => '2'], "2" => ['amenity_id' => '3']]];
            
            pr($this->request->data); die;
            
            $form = $this->Homes->newEntity();
            $form = $this->Homes->patchEntity($form, $this->request->data);
            
        if ($this->Homes->save($form, ['associated'=> ['HomeAmenities', 'HomeFeatures']])) {
                $this->Flash->success(__('The form has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                pr($form->errors()); die;
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('homes', 'states', 'countries', 'states', 'cities', 'amenities', 'features', 'cuisines'));
        $this->set('_serialize', ['homes']);
    }

    public function addHomes() {
        $response = [];
        if ($this->request->is('post')) {
           
            $form = $this->Homes->newEntity();
            //$form = $this->Homes->patchEntity($form, $this->request->data, ['associated' => ['Amenities', 'Features']]);
            $form = $this->Homes->patchEntity($form, $this->request->data);
            
            if(!empty($form->errors())){
                $errors = $this->check($form->errors());
                $response = ['type' => 'error', 'errors' => $errors];
            } else {
                if ($this->Homes->save($form)) {
                    $response = ['type' => 'success', 'text' => 'record inserted successfully'];
                } else {
                    $response = ['type' => 'error', 'text' => 'record not inserted successfully'];
                }
            }
        }
        $this->set(compact('response'));
        $this->set('_serialize', ['response']);
    }

    /**
     * View method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $form = $this->Forms->get($id, [
            'contain' => ['Elements']
        ]);

        $this->set('form', $form);
        $this->set('_serialize', ['form']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->viewBuilder()->layout('default2');
        $form = $this->Homes->newEntity();
        if ($this->request->is('post')) {
            $form = $this->Homes->patchEntity($form, $this->request->data);
            if ($this->Homes->save($form)) {
                $this->Flash->success(__('The form has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $elements = "";
        //$elements = $this->Homes->Elements->find('list', ['limit' => 200]);
        $this->set(compact('form', 'elements'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $form = $this->Forms->get($id, [
            'contain' => ['Elements']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $form = $this->Forms->patchEntity($form, $this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('The form has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $elements = $this->Forms->Elements->find('list', ['limit' => 200]);
        $this->set(compact('form', 'elements'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $form = $this->Forms->get($id);
        if ($this->Forms->delete($form)) {
            $this->Flash->success(__('The form has been deleted.'));
        } else {
            $this->Flash->error(__('The form could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
 
    function check($array) {
        foreach ($array as $key => $error){
            foreach ($error as $msg){
                $newArr[$key][] = $msg;
           }
        }
        return $newArr;
    }
}
