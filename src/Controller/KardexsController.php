<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kardexs Controller
 *
 * @property \App\Model\Table\KardexsTable $Kardexs
 */
class KardexsController extends AppController
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
        $this->set('kardexs', $this->paginate($this->Kardexs));
        $this->set('_serialize', ['kardexs']);
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
        $kardex = $this->Kardexs->get($id, [
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
        $kardex = $this->Kardexs->newEntity();
        if ($this->request->is('post')) {
            $kardex = $this->Kardexs->patchEntity($kardex, $this->request->data);
            if ($this->Kardexs->save($kardex)) {
                $this->Flash->success(__('The kardex has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kardex could not be saved. Please, try again.'));
            }
        }
        $tiposmovimentos = $this->Kardexs->Tiposmovimentos->find('list', ['limit' => 200]);
        $clifors = $this->Kardexs->Clifors->find('list', ['limit' => 200]);
        $produtos = $this->Kardexs->Produtos->find('list', ['limit' => 200]);
        $estoques = $this->Kardexs->Estoques->find('list', ['limit' => 200]);
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
        $kardex = $this->Kardexs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kardex = $this->Kardexs->patchEntity($kardex, $this->request->data);
            if ($this->Kardexs->save($kardex)) {
                $this->Flash->success(__('The kardex has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The kardex could not be saved. Please, try again.'));
            }
        }
        $tiposmovimentos = $this->Kardexs->Tiposmovimentos->find('list', ['limit' => 200]);
        $clifors = $this->Kardexs->Clifors->find('list', ['limit' => 200]);
        $produtos = $this->Kardexs->Produtos->find('list', ['limit' => 200]);
        $estoques = $this->Kardexs->Estoques->find('list', ['limit' => 200]);
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
        $kardex = $this->Kardexs->get($id);
        if ($this->Kardexs->delete($kardex)) {
            $this->Flash->success(__('The kardex has been deleted.'));
        } else {
            $this->Flash->error(__('The kardex could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
