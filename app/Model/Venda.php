<?php

App::uses('AppModel', 'Model');

class Venda extends AppModel {

    public $useTable = 'vendas';
    public $hasMany = [
        'VendaItem'
    ];
    public $validate = [
        'venda_status' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'status da venda não pode estar em branco'
            ],
        ],
        'tipo_venda_id' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'Tipo de venda não pode estar em branco'
            ],
        ],
        'valor_total' => [
            'notBlank' => [
                'rule' => 'notBlank',
                'message' => 'valor total não pode estar em branco'
            ],
            'decimal' => [
                'rule' => ['decimal', 2],
                'message' => 'Informe valor valido. (0.00)'
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

        if (Hash::get($params, 'Venda.id')) {
            $paramsOption['conditions'][] = Hash::get($params, 'Venda.id');
        }

        return $paramsOption;
    }

}
