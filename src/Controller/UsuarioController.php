<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuario Controller
 *
 * @property \App\Model\Table\UsuarioTable $Usuario
 *
 * @method \App\Model\Entity\Usuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuarioController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {

        $this->paginate = [
            'contain' => ['Roles']
        ];
        $usuario = $this->paginate($this->Usuario);

        $this->set(compact('usuario'));
    }

    public function listar() {
        $this->paginate = [
            'contain' => ['Roles']
        ];
        $usuario = $this->Usuario->find('all');
        $this->set([
            'usuario' => $usuario,
            '_serialize' => ['usuario']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $usuario = $this->Usuario->get($id, [
            'contain' => ['Roles', 'Pedido']
        ]);

        $this->set('usuario', $usuario);
    }

    public function ver($id = null) {
        $usuario = $this->Usuario->get($id, [
            'contain' => ['Roles', 'Pedido']
        ]);

        $this->set([
            'usuario' => $usuario,
            '_serialize' => ['usuario']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {

        $usuario = $this->Usuario->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $roles = $this->Usuario->Roles->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'roles'));
    }

    public function agregar() {
        $usuario = $this->Usuario->newEntity();
        $message = '';
        if ($this->request->is('post')) {

            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            $res = array();
            if ($this->Usuario->save($usuario)) {
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
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $usuario = $this->Usuario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());

            if ($this->Usuario->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $roles = $this->Usuario->Roles->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'roles'));
    }

    public function editar($id = null) {
        $usuario = $this->Usuario->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuario->patchEntity($usuario, $this->request->getData());
            $res = array();

            if ($this->Usuario->save($usuario)) {
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
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuario->get($id);
        if ($this->Usuario->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function eliminar($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuario->get($id);
        $res = array();
        if ($this->Usuario->delete($usuario)) {
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

    public function getToken() {
        $res = array();
        $token = $this->request->getParam('_csrfToken');
        $res['token'] = $token;
        $this->set([
            'res' => $res,
            '_serialize' => ['res']
        ]);
    }

}
