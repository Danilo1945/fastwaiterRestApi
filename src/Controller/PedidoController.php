<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Pedido Controller
 *
 * @property \App\Model\Table\PedidoTable $Pedido
 *
 * @method \App\Model\Entity\Pedido[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PedidoController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Usuario']
        ];
        $pedido = $this->paginate($this->Pedido);

        $this->set(compact('pedido'));
    }

    public function listar() {
        $this->paginate = [
            'contain' => ['Usuario']
        ];
        $pedido = $this->paginate($this->Pedido);

        $this->set([
            'pedido' => $pedido,
            '_serialize' => ['pedido']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $pedido = $this->Pedido->get($id, [
            'contain' => ['Usuario', 'Calificacion', 'DetallePedido']
        ]);

        $this->set('pedido', $pedido);
    }

    public function ver($id = null) {
        $pedido = $this->Pedido->get($id, [
            'contain' => ['Usuario', 'Calificacion', 'DetallePedido']
        ]);
        $this->set([
            'pedido' => $pedido,
            '_serialize' => ['pedido']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $pedido = $this->Pedido->newEntity();
        if ($this->request->is('post')) {
            $pedido = $this->Pedido->patchEntity($pedido, $this->request->getData());
            if ($this->Pedido->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
        }
        $usuario = $this->Pedido->Usuario->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'usuario'));
    }

    public function agregar() {
        $pedido = $this->Pedido->newEntity();
        if ($this->request->is('post')) {
            $pedido = $this->Pedido->patchEntity($pedido, $this->request->getData());
            $res = array();
            if ($this->Pedido->save($pedido)) {
                $res['estatus'] = 1;
                $res['message'] = 'Guardado';
            } else {
                $res['estatus'] = 0;
                $res['message'] = 'Error al guardar';
            }
            $this->set([
                'res' => $res,
                '_serialize' => ['res']
            ]);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $pedido = $this->Pedido->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedido->patchEntity($pedido, $this->request->getData());
            if ($this->Pedido->save($pedido)) {
                $this->Flash->success(__('The pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pedido could not be saved. Please, try again.'));
        }
        $usuario = $this->Pedido->Usuario->find('list', ['limit' => 200]);
        $this->set(compact('pedido', 'usuario'));
    }

    public function editar($id = null) {
        $pedido = $this->Pedido->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedido = $this->Pedido->patchEntity($pedido, $this->request->getData());
            $res = array();
            if ($this->Pedido->save($pedido)) {
                $res['estatus'] = 1;
                $res['message'] = 'Editado Con exito';
            } else {
                 $res['estatus'] = 0;
                $res['message'] = 'Error al editar';
                
            }
             $this->set([
                'res' => $res,
                '_serialize' => ['res']
            ]);
        }
       
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedido id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedido->get($id);
        if ($this->Pedido->delete($pedido)) {
            $this->Flash->success(__('The pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The pedido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function eliminar($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $pedido = $this->Pedido->get($id);
         $res = array();
        if ($this->Pedido->delete($pedido)) {
           $res['estatus'] = 1;
            $res['message'] = 'Eliminado Con exito';
        } else {
            $res['estatus'] = 0;
            $res['message'] = 'Error al eliminar Eliminado ';
        }

        $this->set([
            'res' => $res,
            '_serialize' => ['res']
        ]);
    }

}
