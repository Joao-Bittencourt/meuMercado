<?php

App::uses('AppModel', 'Model');

class Produto extends AppModel {

    public $useTable = 'produtos';
    public $belongsTo = [
        'Categoria'
    ];
    public $situacao_tributaria = [
        'T' => 'Tributado por ICMS',
    ];
    public $ind_arredondamento = [
        'A' => 'Arredondamento',
        'T' => 'Truncamento',
    ];
    public $ind_producao = [
        'P' => 'Propria',
        'T' => 'Terceiros',
    ];
    public $validate = [
        'nome' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Nome não pode estar em branco'
            ]
        ],
        'categoria_id' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Categoria não pode estar em branco.'
            ]
        ],
        'descricao' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Descricao não pode estar em branco.'
            ]
        ],
        'ncm' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'NCM não pode estar em branco.'
            ]
        ],
        'unidade_medida' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Unidade de Medida não pode estar em branco.'
            ]
        ],
        'valor_unitario' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Valor não pode estar em branco.'
            ],
            'decimal' => [
                'rule' => ['decimal', 2],
                'message' => 'Informe valor valido. (0.00)'
            ]
        ],
        'situacao_tributaria' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'situacao_tributaria não pode estar em branco.'
            ]
        ],
        'ind_arredondamento' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'ind_arredondamento não pode estar em branco.'
            ]
        ],
        'ind_producao' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'ind_producao não pode estar em branco.'
            ]
        ],
    ];

    public function findAllOrconditions($params = []) {

        $paramsOption = [];

        if (!empty($params)) {
            $paramsOption = $this->buildParamsConditions($params);
        }

        return $this->find('all', $paramsOption);
    }

    public function findListOrconditions($params = []) {

        $paramsOption = [];

        if (!empty($params)) {
            $paramsOption = $this->buildParamsConditions($params);
        }

        return $this->find('list', $paramsOption);
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

        if (Hash::get($params, 'Produto.busca')) {
            $produtoBusca = Hash::get($params, 'Produto.busca');

            $paramsOption['conditions'][] = [
                'or' => [
                    'Produto.nome LIKE' => "%" . $produtoBusca . "%",
                    'Produto.id LIKE' => "%" . $produtoBusca . "%"
                ]
            ];
        }

        return $paramsOption;
    }

}
