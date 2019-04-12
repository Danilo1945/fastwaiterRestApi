<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Calificacion Controller
 *
 * @property \App\Model\Table\CalificacionTable $Calificacion
 *
 * @method \App\Model\Entity\Calificacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalificacionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedido']
        ];
        $calificacion = $this->paginate($this->Calificacion);

        $this->set(compact('calificacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Calificacion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calificacion = $this->Calificacion->get($id, [
            'contain' => ['Pedido']
        ]);

        $this->set('calificacion', $calificacion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calificacion = $this->Calificacion->newEntity();
        if ($this->request->is('post')) {
            $calificacion = $this->Calificacion->patchEntity($calificacion, $this->request->getData());
            if ($this->Calificacion->save($calificacion)) {
                $this->Flash->success(__('The calificacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calificacion could not be saved. Please, try again.'));
        }
        $pedido = $this->Calificacion->Pedido->find('list', ['limit' => 200]);
        $this->set(compact('calificacion', 'pedido'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calificacion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calificacion = $this->Calificacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calificacion = $this->Calificacion->patchEntity($calificacion, $this->request->getData());
            if ($this->Calificacion->save($calificacion)) {
                $this->Flash->success(__('The calificacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calificacion could not be saved. Please, try again.'));
        }
        $pedido = $this->Calificacion->Pedido->find('list', ['limit' => 200]);
        $this->set(compact('calificacion', 'pedido'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calificacion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calificacion = $this->Calificacion->get($id);
        if ($this->Calificacion->delete($calificacion)) {
            $this->Flash->success(__('The calificacion has been deleted.'));
        } else {
            $this->Flash->error(__('The calificacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
