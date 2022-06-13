<?php

App::uses('AppModel', 'Model');

class VendaItem extends AppModel {

    public $useTable = 'venda_itens';
    public $belongsTo = [
        'Venda'
    ];
    public $validate = [
        'produto_id' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Produto não pode estar em branco'
            ]
        ],
        'preco' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Preço não pode estar em branco'
            ],
            'decimal' => [
                'rule' => ['decimal', 2],
                'message' => 'Informe valor valido. (0.00)'
            ]
        ],
        'qtd' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Quantidade não pode estar em branco'
            ] 
        ]
    ];
    
    public function findAllOrconditions($params = []) {

        $paramsOption = [];

        if (!empty($params)) {
            $paramsOption = $this->buildParamsConditions($params);
        }

        return $this->find('all', $paramsOption);
    }

    public function buildParamsConditions($params = []) {
        $paramsOption = [];

        if (Hash::get($params, 'VendaItem.id')) {
            $paramsOption['conditions'][] = Hash::get($params, 'VendaItem.id');
        }

        return $paramsOption;
    }

}
