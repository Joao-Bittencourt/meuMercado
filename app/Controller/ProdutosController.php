<?php

App::uses('AppController', 'Controller');

class ProdutosController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Produto->recursive = -1;

        $this->set('title', 'Produto');
        $this->set('titleButtonSubmit', 'Buscar');

        $dados = $this->Produto->findAllOrConditions($this->request->data);
        $this->set('dados', $dados);
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto não encontrado!'));
        }
        $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
        $this->set('produtos', $this->Produto->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {

        if ($this->Produto->exists($id) && empty($this->request->data)) {
            $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
            $this->request->data = $this->Produto->find('first', $options);
        }

        if ($this->request->is('post')) {
            $this->Produto->create();
            if ($this->Produto->save($this->request->data)) {
                $this->Flash->success(__('Produto salvo com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Produto não pode ser salvo, tente novamente.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto não encontrado!'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Produto->save($this->request->data)) {
                $this->Flash->success(__('Produto editado com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Produto não pode ser salvo, tente novamento.'));
            }
        } else {
            $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
            $this->request->data = $this->Produto->find('first', $options);
        }
    }

    public function editValor($id = null) {
        if (!$this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto não encontrado!'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Produto->save($this->request->data)) {
                $this->Flash->success(__('Produto editado com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Produto não pode ser editado, tente novamente.'));
            }
        } else {
            $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
            $this->request->data = $this->Produto->find('first', $options);
        }
    }

    public function editEstoque($id = null) {
        if (!$this->Produto->exists($id)) {
            throw new NotFoundException(__('Produto não encontrado!'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Produto->save($this->request->data)) {
                $this->Flash->success(__('Produto editado com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Produto não pode ser salvo, tente novamento.'));
            }
        } else {
            $options = array('conditions' => array('Produto.' . $this->Produto->primaryKey => $id));
            $this->request->data = $this->Produto->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Produto->id = $id;
        if (!$this->Produto->exists()) {
            throw new NotFoundException(__('Produto não encontrado!'));
        }
//	$this->request->allowMethod('post', 'delete');
        if ($this->Produto->delete()) {
            $this->Session->setFlash(__('Produto deletado com sucesso.'));
        } else {
            $this->Session->setFlash(__('Produto não pode ser deletado, tente novamento.'));
        }
        return $this->redirect(array('action' => '/'));
    }

}
