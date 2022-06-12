<?php

App::uses('AppController', 'Controller');

class PDVsController extends AppController {

    public $components = array();

    public function beforeRender(): void {
        parent::beforeRender();

        $this->layout = 'pdv';
    }

    public function index() {

        if ($this->request->is('ajax')) {
            $produto_id = Hash::get($this->request->params, 'named.produto_id');
            $this->addProduto($produto_id);
        }

        if ($this->request->is(['put', 'post']) && !$this->request->is('ajax')) {
            debug($this->request);
        }
    }

    public function view($id = null) {
        
    }

    public function add($id = null) {
        
    }

    public function edit($id = null) {
        
    }

    public function delete($id = null) {
        
    }

    public function buscaProdutoSaida() {

        $this->layout = false;
        $this->autoRender = false;

        $Produto = ClassRegistry::init('Produto');

        $data['Produto']['busca'] = $this->request->query('term');
        $produtos = $Produto->findAllOrconditions($data);

        $produtoToPDV = [];
        foreach ($produtos as $produto) {
            $produtoToPDV[] = [
                'label' => Hash::get($produto, 'Produto.nome') . ' | ' . Hash::get($produto, 'Produto.valor_unitario'),
                'id' => Hash::get($produto, 'Produto.id')
            ];
        }

        echo json_encode($produtoToPDV);
    }

    public function addProduto($produto_id = 0) {

        $Produto = ClassRegistry::init('Produto');

        $produto = $Produto->find('first', [
            'conditions' => [
                'Produto.id' => $produto_id
            ]
        ]);

        if (!empty($produto)) {

            $produto_id = Hash::get($produto, 'Produto.id') ?: 0;
            $preco = Hash::get($produto, 'Produto.valor_unitario') ?: 0;

            $vendaItem = [
                'produto_id' => $produto_id,
                'nome' => Hash::get($produto, 'Produto.nome', ' - sem nome -'),
                'preco' => $preco,
                'valor_total' => $preco,
                'qtd' => '1'
            ];
            $this->request->data['VendaItem'][] = $vendaItem;
            $this->request->data['Produto']['busca'] = '';
        }
    }

}
