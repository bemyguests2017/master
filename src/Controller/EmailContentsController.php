<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailContents Controller
 *
 * @property \App\Model\Table\EmailContentsTable $EmailContents
 */
class EmailContentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $emailContents = $this->paginate($this->EmailContents);

        $this->set(compact('emailContents'));
        $this->set('_serialize', ['emailContents']);
    }

    /**
     * View method
     *
     * @param string|null $id Email Content id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailContent = $this->EmailContents->get($id, [
            'contain' => []
        ]);

        $this->set('emailContent', $emailContent);
        $this->set('_serialize', ['emailContent']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailContent = $this->EmailContents->newEntity();
        if ($this->request->is('post')) {
            $emailContent = $this->EmailContents->patchEntity($emailContent, $this->request->data);
            if ($this->EmailContents->save($emailContent)) {
                $this->Flash->success(__('The email content has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The email content could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emailContent'));
        $this->set('_serialize', ['emailContent']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Content id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailContent = $this->EmailContents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailContent = $this->EmailContents->patchEntity($emailContent, $this->request->data);
            if ($this->EmailContents->save($emailContent)) {
                $this->Flash->success(__('The email content has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The email content could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emailContent'));
        $this->set('_serialize', ['emailContent']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Content id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailContent = $this->EmailContents->get($id);
        if ($this->EmailContents->delete($emailContent)) {
            $this->Flash->success(__('The email content has been deleted.'));
        } else {
            $this->Flash->error(__('The email content could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
