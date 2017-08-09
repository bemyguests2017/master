<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\MailerAwareTrait;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {

    use MailerAwareTrait;

    public function initialize() {
        parent::initialize();
        $this->Users = TableRegistry::get('Users');
    }
    
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['register', 'login']);
    }
    
    public function isAuthorized($user) {
        $action = $this->request->params['action'];
        //  registered users can add topics and view index
        if (in_array($action, ['profile', 'logout'])) {
            return true;
        }
        return parent::isAuthorized($user);
    }
    /**
     * register method
     *
     * @return \Cake\Network\Response|null
     */
    public function register() {
        $this->viewBuilder()->layout('default2');
        $user = $this->Users->newEntity();

        if ($this->Auth->user('id')) {
            return $this->redirect(['controller' => 'Homes', 'action' => 'index']);
        }


        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if (empty($user->errors())) {
                if ($user = $this->Users->save($user)) {
                    $this->Auth->setUser($user);
                    $this->Flash->success(__('You have registed successfully.'));
                    $this->redirect(['controller' => 'Homes', 'action' => 'index']);
                } else {
                    $this->Flash->error(__('erro'));
                }
            }
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    
    
    
    function login() {
        $this->viewBuilder()->layout('default2');
        if ($this->Auth->user('id')) {
            return $this->redirect(['controller' => 'Homes', 'action' => 'index']);
        }

        if ($this->request->is('post')) {
            if ($this->Auth->identify()) {
                $this->Homes = TableRegistry::get('Homes');
                $setData = $this->Auth->identify();
                $homeDetails = $this->Homes->find('all')->where(['user_id' => $setData['id']])->first();
                $setData['homeId'] = $homeDetails->id;
                $setData['homeName'] = $homeDetails->name;
                $this->Auth->setUser($setData);                
                return $this->redirect(['controller' => 'Homes', 'action' => 'index']);
            } else {
                $this->Flash->error(__("Error"));
                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function logout() {
        $this->Auth->logout();
        $this->Flash->error(__("Error"));
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }
    
    public function profile() {
        $this->viewBuilder()->layout('default2');
        $user = $this->Users->get($this->Auth->user('id'));
        
        if($this->request->is(['put', 'post'])){
            $user = $this->Users->patchEntity($user, $this->request->data);
            if($this->Users->save($user)){
                $this->redirect(['controller' => 'Users', 'action' => 'profile']);
            }            
        }
        
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

}
