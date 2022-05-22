<?php

App::uses('AppController', 'Controller');

class CategoriasController extends AppController {

    public $components = array();

    public function index() {

        $this->set('title', 'Categoria');
        $this->set('titleButtonSubmit', 'Buscar');

        $dados = $this->Categoria->findAllOrConditions($this->request->data);
        $this->set('dados', $dados);
    }

    public function view($id = null) {
        if (!$this->Categoria->exists($id)) {
            throw new NotFoundException(__('Categoria não encontrado!'));
        }
        $options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
        $this->set('produtos', $this->Categoria->find('first', $options));
    }

    public function add($id = null) {

        if ($this->Categoria->exists($id) && empty($this->request->data)) {
            $options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
            $this->request->data = $this->Categoria->find('first', $options);
        }
        

        if ($this->request->is('post')) {
            $this->Categoria->create();
            if ($this->Categoria->save($this->request->data)) {
                $this->Flash->success(__('Categoria salvo com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Categoria não pode ser salvo, tente novamente.'));
            }
        }
    }

    public function edit($id = null) {
        if (!$this->Categoria->exists($id)) {
            throw new NotFoundException(__('Categoria não encontrado!'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Categoria->save($this->request->data)) {
                $this->Flash->success(__('Categoria editado com sucesso!'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Categoria não pode ser salvo, tente novamento.'));
            }
        } else {
            $options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
            $this->request->data = $this->Categoria->find('first', $options);
        }
        
        $this->render('add');
    }

    

    public function delete($id = null) {
        $this->Categoria->id = $id;
        if (!$this->Categoria->exists()) {
            throw new NotFoundException(__('Categoria não encontrado!'));
        }
//	$this->request->allowMethod('post', 'delete');
        if ($this->Categoria->delete()) {
            $this->Session->setFlash(__('Categoria deletado com sucesso.'));
        } else {
            $this->Session->setFlash(__('Categoria não pode ser deletada, tente novamento.'));
        }
        return $this->redirect(array('action' => '/'));
    }

}
