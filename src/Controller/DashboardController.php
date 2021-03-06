<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dashboard Controller
 *
 * @property \App\Model\Table\DashboardTable $Dashboard
 */
class DashboardController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        
        $this->set('_serialize', ['dashboard']);
        $this->set(compact('dashboard'));
        
        

        //teste
        
      $this->request->session()->write('merdaaa', 'lixo lixo lixo');
      $this->request->session()->write('nome', 'Fabio');
      $this->request->session()->write('idade', '36');
      $this->request->session()->write('Empresa', 'industriafox');
        
    }

    /**
     * View method
     *
     * @param string|null $id Dashboard id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dashboard = $this->Dashboard->get($id, [
            'contain' => []
        ]);
        $this->set('dashboard', $dashboard);
        $this->set('_serialize', ['dashboard']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dashboard = $this->Dashboard->newEntity();
        if ($this->request->is('post')) {
            $dashboard = $this->Dashboard->patchEntity($dashboard, $this->request->data);
            if ($this->Dashboard->save($dashboard)) {
                $this->Flash->success(__('The dashboard has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dashboard could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dashboard'));
        $this->set('_serialize', ['dashboard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dashboard id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dashboard = $this->Dashboard->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dashboard = $this->Dashboard->patchEntity($dashboard, $this->request->data);
            if ($this->Dashboard->save($dashboard)) {
                $this->Flash->success(__('The dashboard has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dashboard could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dashboard'));
        $this->set('_serialize', ['dashboard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dashboard id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dashboard = $this->Dashboard->get($id);
        if ($this->Dashboard->delete($dashboard)) {
            $this->Flash->success(__('The dashboard has been deleted.'));
        } else {
            $this->Flash->error(__('The dashboard could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
