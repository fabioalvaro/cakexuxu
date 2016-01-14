<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kardex Controller
 *
 * @property \App\Model\Table\KardexTable $Kardex
 */
class KardexController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tiposmovimentos', 'Clifors', 'Produtos', 'Estoques']
        ];
        $this->set('kardex', $this->paginate($this->Kardex));
        $this->set('_serialize', ['kardex']);
    }

    /**
     * View method
     *
     * @param string|null $id Kardex id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kardex = $this->Kardex->get($id, [
            'contain' => ['Tiposmovimentos', 'Clifors', 'Produtos', 'Estoques']
        ]);
        $this->set('kardex', $kardex);
        $this->set('_serialize', ['kardex']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kardex = $this->Kardex->newEntity();
        if ($this->request->is('post')) {
            $kardex = $this->Kardex->patchEntity($kardex, $this->request->data);
            if ($this->Kardex->save($kardex)) {
                $this->Flash->success(__('The kardex has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kardex could not be saved. Please, try again.'));
            }
        }
        $tiposmovimentos = $this->Kardex->Tiposmovimentos->find('list', ['limit' => 200]);
        $clifors = $this->Kardex->Clifors->find('list', ['limit' => 200]);
        $produtos = $this->Kardex->Produtos->find('list', ['limit' => 200]);
        $estoques = $this->Kardex->Estoques->find('list', ['limit' => 200]);
        $this->set(compact('kardex', 'tiposmovimentos', 'clifors', 'produtos', 'estoques'));
        $this->set('_serialize', ['kardex']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Kardex id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kardex = $this->Kardex->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kardex = $this->Kardex->patchEntity($kardex, $this->request->data);
            if ($this->Kardex->save($kardex)) {
                $this->Flash->success(__('The kardex has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kardex could not be saved. Please, try again.'));
            }
        }
        $tiposmovimentos = $this->Kardex->Tiposmovimentos->find('list', ['limit' => 200]);
        $clifors = $this->Kardex->Clifors->find('list', ['limit' => 200]);
        $produtos = $this->Kardex->Produtos->find('list', ['limit' => 200]);
        $estoques = $this->Kardex->Estoques->find('list', ['limit' => 200]);
        $this->set(compact('kardex', 'tiposmovimentos', 'clifors', 'produtos', 'estoques'));
        $this->set('_serialize', ['kardex']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Kardex id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kardex = $this->Kardex->get($id);
        if ($this->Kardex->delete($kardex)) {
            $this->Flash->success(__('The kardex has been deleted.'));
        } else {
            $this->Flash->error(__('The kardex could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
