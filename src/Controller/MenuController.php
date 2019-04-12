<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Menu Controller
 *
 * @property \App\Model\Table\MenuTable $Menu
 *
 * @method \App\Model\Entity\Menu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenuController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Platillo']
        ];
        $menu = $this->paginate($this->Menu);

        $this->set(compact('menu'));
    }

    public function listar() {
        $this->paginate = [
            'contain' => ['Platillo']
        ];
        $menu = $this->paginate($this->Menu);
        $this->set([
            'menu' => $menu,
            '_serialize' => ['menu']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $menu = $this->Menu->get($id, [
            'contain' => ['Platillo', 'DetallePedido']
        ]);

        $this->set('menu', $menu);
    }

    public function ver($id = null) {
        $menu = $this->Menu->get($id, [
            'contain' => ['Platillo', 'DetallePedido']
        ]);

        $this->set([
            'menu' => $menu,
            '_serialize' => ['menu']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $menu = $this->Menu->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            if ($this->Menu->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
        $platillo = $this->Menu->Platillo->find('list', ['limit' => 200]);
        $this->set(compact('menu', 'platillo'));
    }

    public function agregar() {
        $menu = $this->Menu->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            $res = array();
            if ($this->Menu->save($menu)) {
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
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $menu = $this->Menu->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            if ($this->Menu->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
        $platillo = $this->Menu->Platillo->find('list', ['limit' => 200]);
        $this->set(compact('menu', 'platillo'));
    }

    public function editar($id = null) {
        $menu = $this->Menu->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menu->patchEntity($menu, $this->request->getData());
            $res = array();
            if ($this->Menu->save($menu)) {
                $res['estatus'] = 1;
                $res['message'] = 'Editado Con exito';
            } else {
                $res['estatus'] = 0;
                $res['message'] = 'Error al editar';
            }
        }
        $this->set([
            'res' => $res,
            '_serialize' => ['res']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menu->get($id);
        if ($this->Menu->delete($menu)) {
            $this->Flash->success(__('The menu has been deleted.'));
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function eliminar($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $res = array();
        $menu = $this->Menu->get($id);
        if ($this->Menu->delete($menu)) {
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
