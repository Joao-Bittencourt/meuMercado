<?php

App::uses('AppController', 'Controller');

class VendasController extends AppController {

    public $components = array();

    public function beforeRender(): void {
        parent::beforeRender();
        $this->layout = 'pdv';
    }

    public function index() {}

    public function view($id = null) {}

    public function add($id = null) {
        
        if ($this->request->is(['put', 'post']) && !$this->request->is('ajax')) {
 
           $dataToPersist = Hash::filter($this->request->data);
             
            if ($this->Venda->saveAll($dataToPersist, ['validate' => 'only', 'deep' => true])) {
                
            } else {
             debug($this->Venda->validationErrors);
             debug($this->Venda->VendaItem->validationErrors);
            }
            die('vendasController');
        }
    }

    public function edit($id = null) {}

    public function delete($id = null) {}

}
