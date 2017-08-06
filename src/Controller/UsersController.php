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
        $this->Auth->allow(['register', 'logout', 'login']);
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
    
    
    /*function login() {
        $this->viewBuilder()->layout('default2');
        $user = $this->Users->newEntity();
        if (!($this->Auth->user('id'))) {
            if ($this->request->is('post')) {
                $user = $this->Users->newEntity($this->request->data, ['validate' => 'Login']);
                if (empty($user->errors())) {
                    $user = $this->Auth->identify();
                    var_dump($user); die;
                    if ($user) {
                        $this->Auth->setUser($user);
                        return $this->redirect(['controller' => 'Homes', 'action' => 'index']);
                    } else {
                        $this->Flash->error(__("Error"));
                        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
                    }
                } else {
                    $user->errors($user->errors());
                }
            }
        } else {
            return $this->redirect(['controller' => 'Homes', 'action' => 'index']);
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }*/
    
    function login() {
        $this->viewBuilder()->layout('default2');
        if ($this->Auth->user('id')) {
            return $this->redirect(['controller' => 'Homes', 'action' => 'index']);
        }

        if ($this->request->is('post')) {
            if ($this->Auth->identify()) {                
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

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->Users->get($id, [
            'contain' => ['Patients']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
