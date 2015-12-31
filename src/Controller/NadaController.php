<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nada Controller
 *
 * @property \App\Model\Table\NadaTable $Nada
 */
class NadaController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('nada', $this->paginate($this->Nada));
        $this->set('_serialize', ['nada']);
    }

    /**
     * View method
     *
     * @param string|null $id Nada id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nada = $this->Nada->get($id, [
            'contain' => []
        ]);
        $this->set('nada', $nada);
        $this->set('_serialize', ['nada']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nada = $this->Nada->newEntity();
        if ($this->request->is('post')) {
            $nada = $this->Nada->patchEntity($nada, $this->request->data);
            if ($this->Nada->save($nada)) {
                $this->Flash->success(__('The nada has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nada could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nada'));
        $this->set('_serialize', ['nada']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nada id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nada = $this->Nada->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nada = $this->Nada->patchEntity($nada, $this->request->data);
            if ($this->Nada->save($nada)) {
                $this->Flash->success(__('The nada has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nada could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nada'));
        $this->set('_serialize', ['nada']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nada id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nada = $this->Nada->get($id);
        if ($this->Nada->delete($nada)) {
            $this->Flash->success(__('The nada has been deleted.'));
        } else {
            $this->Flash->error(__('The nada could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
