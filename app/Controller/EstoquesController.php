<?php

App::uses('AppController', 'Controller');

class EstoquesController extends AppController {


    public $components = array('Paginator', 'Flash');

 
    public function index() {
       

        $this->set('title', 'Estoque');
        $this->set('titleButtonSubmit', 'Buscar');

        $dados = $this->Estoque->findAllOrConditions($this->request->data);
        $this->set('dados', $dados);
    }

    
    public function add($produto_id = null) {
       
    }
   
}
