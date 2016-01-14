<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clifor Controller
 *
 * @property \App\Model\Table\CliforTable $Clifor
 */
class CliforController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('clifor', $this->paginate($this->Clifor));
        $this->set('_serialize', ['clifor']);
    }

    /**
     * View method
     *
     * @param string|null $id Clifor id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clifor = $this->Clifor->get($id, [
            'contain' => ['Kardex']
        ]);
        $this->set('clifor', $clifor);
        $this->set('_serialize', ['clifor']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clifor = $this->Clifor->newEntity();
        if ($this->request->is('post')) {
            $clifor = $this->Clifor->patchEntity($clifor, $this->request->data);
            if ($this->Clifor->save($clifor)) {
                $this->Flash->success(__('The clifor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clifor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clifor'));
        $this->set('_serialize', ['clifor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Clifor id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clifor = $this->Clifor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clifor = $this->Clifor->patchEntity($clifor, $this->request->data);
            if ($this->Clifor->save($clifor)) {
                $this->Flash->success(__('The clifor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The clifor could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clifor'));
        $this->set('_serialize', ['clifor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Clifor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clifor = $this->Clifor->get($id);
        if ($this->Clifor->delete($clifor)) {
            $this->Flash->success(__('The clifor has been deleted.'));
        } else {
            $this->Flash->error(__('The clifor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
