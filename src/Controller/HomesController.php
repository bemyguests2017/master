<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

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
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['index', 'addHomesLocation', 'addHomesPhotos', 'uploadImages', 'addHomeMembers', 'addHomeCuisines']);
    }

    public function index($homeId = 38) {
        $homes = null;
        $this->viewBuilder()->layout('default2');
        $amenities = \Cake\ORM\TableRegistry::get('Amenities')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $features = \Cake\ORM\TableRegistry::get('Features')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $cuisines = \Cake\ORM\TableRegistry::get('Cuisines')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();

        $homes = $this->Homes->newEntity();
        if ($homeId) {
            $homes = $this->Homes->get($homeId);
        }

        if ($this->request->is(['POST', 'PUT'])) {

            $this->HomeAmenities = \Cake\ORM\TableRegistry::get('HomeAmenities');
            $this->HomeFeatures = \Cake\ORM\TableRegistry::get('HomeFeatures');

            $this->request->data['amenity_ids'] = count($this->request->data['amenity_ids']) ? implode(',', $this->request->data['amenity_ids']) : "";
            $this->request->data['feature_ids'] = count($this->request->data['feature_ids']) ? implode(',', $this->request->data['feature_ids']) : "";

            $homes = $this->Homes->patchEntity($homes, $this->request->data);

            if ($homeDetails = $this->Homes->save($homes)) {
                $this->Flash->success(__('The form has been saved.'));
                $this->redirect(['action' => 'index', $homeDetails->id]);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('homes', 'states', 'countries', 'states', 'cities', 'amenities', 'features', 'cuisines'));
        $this->set('_serialize', ['homes']);
    }

    public function addHomesLocation() {
        $location = "";
        $this->viewBuilder()->layout('default2');
        $countries = \Cake\ORM\TableRegistry::get('Countries')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $states = \Cake\ORM\TableRegistry::get('States')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();
        $cities = \Cake\ORM\TableRegistry::get('Cities')->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();

        $homeId = '38';
        if ($homeId) {
            $homes = $this->Homes->get($homeId);
        }

        if ($this->request->is('post')) {
            //pr($this->request->data); die;
            $homes = $this->Homes->patchEntity($homes, $this->request->data);

            if ($this->Homes->save($homes)) {
                $this->Flash->success(__('The form has been saved.'));
                $this->redirect(['action' => 'addHomesLocation']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('homes', 'countries', 'states', 'cities'));
        $this->set('_serialize', ['homes']);
    }

    public function addHomesPhotos() {
        $this->HomeImages = \Cake\ORM\TableRegistry::get('HomeImages');
        $this->viewBuilder()->layout('default2');
        $userId = $homeId = '38';
        $path = WWW_ROOT . DS . 'userFiles' . DS . $userId . DS . 'HomeImages';
        $pathImage = '/' . 'userFiles' . '/' . $userId . '/' . 'HomeImages';
        $homeImages = $this->HomeImages->find('all')->where(['home_id' => $homeId]);
        if ($this->request->is('post')) {
            $images = $this->uploadImages($this->request->data, $homeId);
            
            $homes = $this->HomeImages->newEntities($images);
            if ($this->HomeImages->saveMany($homes)) {
                $this->Flash->success(__('The form has been saved.'));
                $this->redirect(['action' => 'addHomesLocation']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('homeImages', 'countries', 'states', 'cities', 'pathImage'));
        $this->set('_serialize', ['homeImages']);
    }

    public function uploadImages($images, $homeId) {
        $userId = $this->Auth->user('id') ? $this->Auth->user('id') : 38;
        $path = WWW_ROOT . DS . 'userFiles' . DS . $userId . DS . 'HomeImages';
        if (!file_exists($path)) {
            $dir = new Folder($path, true, 0755);
        }

        foreach ($images['photo'] as $key => $image) {
            if (!empty($image['name'])) {
               
                $ext = substr(strtolower(strrchr($image['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                //only process if the extension is valid
                if (in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is
                    //where we are putting it
                    move_uploaded_file($image['tmp_name'], $path .DS. $image['name']);

                    //prepare the filename for database entry
                    $saveImageData[$key]['home_id'] = $homeId;
                    $saveImageData[$key]['image'] = $image['name'];
                }
            }
        }
        
        return $saveImageData;
    }
    
    public function addHomeMembers($memberId = null) {
        $member = "";
        $members = "";
        $this->viewBuilder()->layout('default2');
        $homeId = '38';
        $userId = $this->Auth->user('id') ? $this->Auth->user('id') : 38;
        $this->HomeMembers = \Cake\ORM\TableRegistry::get('HomeMembers');
        
        $pathImage = '/' . 'userFiles' . '/' . $userId . '/' . 'members';
        
        $member = $this->HomeMembers->newEntity();
        if ($memberId) {
            $member = $this->HomeMembers->get($memberId);
        }
        
        if ($homeId) {
            $members = $this->HomeMembers->find('all')->where(['home_id' => $homeId]);
        }
        

        if ($this->request->is(['post', 'put'])) {
            $this->request->data['home_id'] = $homeId;
            $this->request->data['profile_picture'] = $this->uploadImageGeneric($this->request->data['photo'], 'members');
            
            $homeMembers = $this->HomeMembers->patchEntity($member, $this->request->data);
                
            if ($this->HomeMembers->save($homeMembers)) {
                $this->Flash->success(__('The form has been saved.'));
                $this->redirect(['action' => 'addHomeMembers']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('member', 'members', 'pathImage'));
        $this->set('_serialize', ['member']);
    }
    
    
    public function addHomeCuisines($cuisineId = null) {
        $this->viewBuilder()->layout('default2');
        $homeId = '38';
        
        $this->HomeCuisines = \Cake\ORM\TableRegistry::get('HomeCuisines');
        $this->CuisineCategories = \Cake\ORM\TableRegistry::get('CuisineCategories');
        $categoryList = $this->CuisineCategories->find('list');
        $allCuisines = $this->HomeCuisines->find('all')->contain(['CuisineCategories']);
        
        
        $cuisine = $this->HomeCuisines->newEntity();
        if ($cuisineId) {
            $cuisine = $this->HomeCuisines->get($cuisineId);
        }

        if ($this->request->is(['post', 'put'])) {
            
            $this->request->data['home_id'] = $homeId;
            
            $homeCuisines = $this->HomeCuisines->patchEntity($cuisine, $this->request->data);
                
            if ($this->HomeCuisines->save($homeCuisines)) {
                $this->Flash->success(__('The form has been saved.'));
                $this->redirect(['action' => 'addHomeCuisines']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('categoryList', 'allCuisines', 'cuisine'));
        $this->set('_serialize', ['cuisine']);
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
        foreach ($array as $key => $error) {
            foreach ($error as $msg) {
                $newArr[$key][] = $msg;
            }
        }
        return $newArr;
    }

}
