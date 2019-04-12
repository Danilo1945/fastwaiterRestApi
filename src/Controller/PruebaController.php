<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Prueba Controller
 *
 * @property \App\Model\Table\PruebaTable $Prueba
 *
 * @method \App\Model\Entity\Prueba[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PruebaController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $prueba = $this->paginate($this->Prueba);

        $this->set(compact('prueba'));
    }

    /**
     * View method
     *
     * @param string|null $id Prueba id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $prueba = $this->Prueba->get($id, [
            'contain' => []
        ]);

        $this->set('prueba', $prueba);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $prueba = $this->Prueba->newEntity();
        if ($this->request->is('post')) {
            $prueba = $this->Prueba->patchEntity($prueba, $this->request->getData());
            if ($this->Prueba->save($prueba)) {
                $this->Flash->success(__('The prueba has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prueba could not be saved. Please, try again.'));
        }
        $this->set(compact('prueba'));
    }

    public function agregar() {

        $prueba = $this->Prueba->newEntity();
        if ($this->request->is('post')) {

            $indicador = $this->request->getData();
            $prueba = $this->Prueba->patchEntity($prueba, $this->request->getData());
            $res = array();
            if ($this->Prueba->save($prueba)) {
                //$this->Flash->success(__('The casa has been saved.'));
                $res['estatus'] = 1;
                $res['indicador'] = $indicador;
                $res['message'] = 'Guardado';
                //return $this->redirect(['action' => 'index']);
            } else {
                $res['estatus'] = 0;
                $res['indicador'] = $indicador;
                $res['message'] = 'Error Al Guardar';
            }

            $this->set([
                'res' => $res,
                '_serialize' => ['res']
            ]);
            // $this->Flash->error(__('The casa could not be saved. Please, try again.'));
        }
        //$usuario = $this->Casa->Usuario->find('list', ['limit' => 200]);
        // $this->set(compact('casa', 'usuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Prueba id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $prueba = $this->Prueba->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prueba = $this->Prueba->patchEntity($prueba, $this->request->getData());
            if ($this->Prueba->save($prueba)) {
                $this->Flash->success(__('The prueba has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The prueba could not be saved. Please, try again.'));
        }
        $this->set(compact('prueba'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Prueba id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $prueba = $this->Prueba->get($id);
        if ($this->Prueba->delete($prueba)) {
            $this->Flash->success(__('The prueba has been deleted.'));
        } else {
            $this->Flash->error(__('The prueba could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
