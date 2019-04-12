<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mesa Controller
 *
 * @property \App\Model\Table\MesaTable $Mesa
 *
 * @method \App\Model\Entity\Mesa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MesaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mesa = $this->paginate($this->Mesa);

        $this->set(compact('mesa'));
    }
     public function listar()
    {
        $mesa = $this->paginate($this->Mesa);

        $this->set(compact('mesa'));
         $this->set([
            'mesa' => $mesa,
            '_serialize' => ['mesa']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mesa = $this->Mesa->get($id, [
            'contain' => ['DetallePedido']
        ]);

        $this->set('mesa', $mesa);
    }
     public function ver($id = null)
    {
        $mesa = $this->Mesa->get($id, [
            'contain' => ['DetallePedido']
        ]);

        $this->set([
            'mesa' => $mesa,
            '_serialize' => ['mesa']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mesa = $this->Mesa->newEntity();
        if ($this->request->is('post')) {
            $mesa = $this->Mesa->patchEntity($mesa, $this->request->getData());
            if ($this->Mesa->save($mesa)) {
                $this->Flash->success(__('The mesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesa could not be saved. Please, try again.'));
        }
        $this->set(compact('mesa'));
    }
    
     public function agregar()
    {
        $mesa = $this->Mesa->newEntity();
        if ($this->request->is('post')) {
            $mesa = $this->Mesa->patchEntity($mesa, $this->request->getData());
            $res = array();
            if ($this->Mesa->save($mesa)) {
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
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mesa = $this->Mesa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesa = $this->Mesa->patchEntity($mesa, $this->request->getData());
            if ($this->Mesa->save($mesa)) {
                $this->Flash->success(__('The mesa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mesa could not be saved. Please, try again.'));
        }
        $this->set(compact('mesa'));
    }
     public function editar($id = null)
    {
        $mesa = $this->Mesa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mesa = $this->Mesa->patchEntity($mesa, $this->request->getData());
           $res = array();
            if ($this->Mesa->save($mesa)) {
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
     * @param string|null $id Mesa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesa = $this->Mesa->get($id);
        if ($this->Mesa->delete($mesa)) {
            $this->Flash->success(__('The mesa has been deleted.'));
        } else {
            $this->Flash->error(__('The mesa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function eliminar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mesa = $this->Mesa->get($id);
        $res = array();
        if ($this->Mesa->delete($mesa)) {
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
