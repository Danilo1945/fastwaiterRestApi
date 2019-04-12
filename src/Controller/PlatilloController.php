<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Platillo Controller
 *
 * @property \App\Model\Table\PlatilloTable $Platillo
 *
 * @method \App\Model\Entity\Platillo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PlatilloController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $platillo = $this->paginate($this->Platillo);

        $this->set(compact('platillo'));
    }

    public function listar() {
        $platillo = $this->paginate($this->Platillo);

        $this->set(compact('platillo'));

        $this->set([
            'platillo' => $platillo,
            '_serialize' => ['platillo']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Platillo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $platillo = $this->Platillo->get($id, [
            'contain' => ['Menu']
        ]);

        $this->set('platillo', $platillo);
    }

    public function ver($id = null) {
        $platillo = $this->Platillo->get($id, [
            'contain' => ['Menu']
        ]);

        $this->set([
            'platillo' => $platillo,
            '_serialize' => ['platillo']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $platillo = $this->Platillo->newEntity();
        if ($this->request->is('post')) {
            $platillo = $this->Platillo->patchEntity($platillo, $this->request->getData());
            if ($this->Platillo->save($platillo)) {
                $this->Flash->success(__('The platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The platillo could not be saved. Please, try again.'));
        }
        $this->set(compact('platillo'));
    }

    public function agregar() {
        $platillo = $this->Platillo->newEntity();
        if ($this->request->is('post')) {
            $platillo = $this->Platillo->patchEntity($platillo, $this->request->getData());
            $res = array();
            if ($this->Platillo->save($platillo)) {
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
     * @param string|null $id Platillo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $platillo = $this->Platillo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $platillo = $this->Platillo->patchEntity($platillo, $this->request->getData());
            if ($this->Platillo->save($platillo)) {
                $this->Flash->success(__('The platillo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The platillo could not be saved. Please, try again.'));
        }
        $this->set(compact('platillo'));
    }

    public function editar($id = null) {
        $platillo = $this->Platillo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $platillo = $this->Platillo->patchEntity($platillo, $this->request->getData());
            $res = array();
            if ($this->Platillo->save($platillo)) {
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
     * @param string|null $id Platillo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $platillo = $this->Platillo->get($id);
        if ($this->Platillo->delete($platillo)) {
            $this->Flash->success(__('The platillo has been deleted.'));
        } else {
            $this->Flash->error(__('The platillo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
