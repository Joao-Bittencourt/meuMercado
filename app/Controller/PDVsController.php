<?php

App::uses('AppController', 'Controller');

class PDVsController extends AppController {

    public $components = array();

    public function beforeRender(): void {
        parent::beforeRender();

        $this->layout = 'pdv';
    }

    public function index() {
        
        $Produto = ClassRegistry::init('Produto');
        $this->request->data =  $Produto->find('all');
        $this->set('pdv_products', $Produto->find('all'));
        
    }

    public function view($id = null) {
        
    }

    public function add($id = null) {
        
    }

    public function edit($id = null) {
        
    }

    public function delete($id = null) {
        
    }

}
