<?php

App::uses('AppModel', 'Model');

class Produto extends AppModel {

    public $useTable = 'produtos';
    public $validate = [
        'nome' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Nome não pode estar em branco'
            ]
        ],
        'tipo' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Tipo não pode estar em branco.'
            ]
        ],
        'valor' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Valor não pode estar em branco.'
            ],
            'decimal' => [
                'rule' => array('decimal', 2),
                'message' => 'Informe valor valido. (0.00)'
            ]
        ],
        'estoque' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'estoque não pode estar em branco.'
            ],
            'numeric' => [
                'rule' => 'numeric',
                'message' => 'Informe somente numeros'
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

        if (Hash::get($params, 'Produto.id')) {
            $paramsOption['conditions'][] = Hash::get($params, 'Produto.id');
        }

        if (Hash::get($params, 'Produto.nome')) {
            $paramsOption['conditions'][]['Produto.nome LIKE'] = "%" . Hash::get($params, 'Produto.nome') . "%";
        }

        if (Hash::get($params, 'Produto.tipo')) {
            $paramsOption['conditions'][]['Produto.tipo LIKE'] = "%" . Hash::get($params, 'Produto.tipo') . "%";
        }

        return $paramsOption;
    }

}
