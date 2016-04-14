<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Associations Controller
 *
 * @property \App\Model\Table\AssociationsTable $Associations
 * @property \App\Model\Table\CategoriesTable $Categories
 */
class AssociationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $associations = $this->paginate($this->Associations);

        $this->set(compact('associations'));
        $this->set('_serialize', ['associations']);
    }

    /**
     * View method
     *
     * @param string|null $id Association id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $association = $this->Associations->get($id, [
            'contain' => []
        ]);

        $this->set('association', $association);
        $this->set('_serialize', ['association']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Categories');
        $association = $this->Associations->newEntity();
        if ($this->request->is('post')) {
            $association = $this->Associations->patchEntity($association, $this->request->data);
            if ($this->Associations->save($association)) {
                $this->Flash->success(__('Thanks for registering. Your entry has been saved. For further information, dial 73089'));
                return $this->redirect('/success');
            } else {
                $this->Flash->error(__('Your entry could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('association'));
        $this->set('_serialize', ['association']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Association id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $association = $this->Associations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $association = $this->Associations->patchEntity($association, $this->request->data);
            if ($this->Associations->save($association)) {
                $this->Flash->success(__('The association has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The association could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('association'));
        $this->set('_serialize', ['association']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Association id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $association = $this->Associations->get($id);
        if ($this->Associations->delete($association)) {
            $this->Flash->success(__('The association has been deleted.'));
        } else {
            $this->Flash->error(__('The association could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function success(){
        
    }
}
