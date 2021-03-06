<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller\Admin;


use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $session = null;
    //public $components = ['Acl' => ['className' => 'Acl.Acl']];
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize() {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        /*$this->loadComponent('Auth', [            
            //'authorize' => ['Acl.Actions' => ['actionPath' => 'controllers/']],
            'authorize' => ['Controller'],
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'username', 'password' => 'password'],
                    'scope' => ['Users.group_id IN' => [1,2]],
                    'contain' =>['Groups']
                ]
            ],
            'loginRedirect' => ['controller'=>'Specialities','action'=>'index'],
            'logoutRedirect' => ['controller'=>'Users','action' => 'login'],
            'unauthorizedRedirect' => ['controller' => 'Users','action' => 'login'],
            'authError' => 'You are not authorized to access that location.',
            'flash' => ['element' => 'error']
        ]);*/
        
        $session = $this->request->session();
        $this->set(compact('session'));
    }
    
    /**
     * 
     */
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('main');
        
    }    


    /**
     * isAuthorized method
     * 
     * @param array $user logged in user info
     * @return void
     */
    
    /*public function isAuthorized($user){
        // Only admins can access admin functions
        if ($this->request->params['prefix'] === 'admin') {
            return (bool)(in_array($user['group_id'],[1,2]));            
        }
        // Default deny
        return false;
    }*/
   
    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
    /*public function beforeRender(Event $event) {
        if (!array_key_exists('_serialize', $this->viewVars) &&
                in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }*/
    
    
    

}
