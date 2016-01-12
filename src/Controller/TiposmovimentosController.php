<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiposmovimentos Controller
 *
 * @property \App\Model\Table\TiposmovimentosTable $Tiposmovimentos
 */
class TiposmovimentosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tiposmovimentos', $this->paginate($this->Tiposmovimentos));
        $this->set('_serialize', ['tiposmovimentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tiposmovimento id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposmovimento = $this->Tiposmovimentos->get($id, [
            'contain' => []
        ]);
        $this->set('tiposmovimento', $tiposmovimento);
        $this->set('_serialize', ['tiposmovimento']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposmovimento = $this->Tiposmovimentos->newEntity();
        if ($this->request->is('post')) {
            $tiposmovimento = $this->Tiposmovimentos->patchEntity($tiposmovimento, $this->request->data);
            if ($this->Tiposmovimentos->save($tiposmovimento)) {
                $this->Flash->success(__('The tiposmovimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tiposmovimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposmovimento'));
        $this->set('_serialize', ['tiposmovimento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposmovimento id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposmovimento = $this->Tiposmovimentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposmovimento = $this->Tiposmovimentos->patchEntity($tiposmovimento, $this->request->data);
            if ($this->Tiposmovimentos->save($tiposmovimento)) {
                $this->Flash->success(__('The tiposmovimento has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tiposmovimento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposmovimento'));
        $this->set('_serialize', ['tiposmovimento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposmovimento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposmovimento = $this->Tiposmovimentos->get($id);
        if ($this->Tiposmovimentos->delete($tiposmovimento)) {
            $this->Flash->success(__('The tiposmovimento has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposmovimento could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
