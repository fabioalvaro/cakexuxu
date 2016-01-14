<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clifors Controller
 *
 * @property \App\Model\Table\CliforsTable $Clifors
 */
class CliforsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('clifors', $this->paginate($this->Clifors));
        $this->set('_serialize', ['clifors']);
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
        $clifor = $this->Clifors->get($id, [
            'contain' => ['Kardexs']
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
        $clifor = $this->Clifors->newEntity();
        if ($this->request->is('post')) {
            $clifor = $this->Clifors->patchEntity($clifor, $this->request->data);
            if ($this->Clifors->save($clifor)) {
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
        $clifor = $this->Clifors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clifor = $this->Clifors->patchEntity($clifor, $this->request->data);
            if ($this->Clifors->save($clifor)) {
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
        $clifor = $this->Clifors->get($id);
        if ($this->Clifors->delete($clifor)) {
            $this->Flash->success(__('The clifor has been deleted.'));
        } else {
            $this->Flash->error(__('The clifor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
