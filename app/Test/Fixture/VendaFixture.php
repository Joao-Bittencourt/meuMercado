<?php

class VendaFixture extends CakeTestFixture {

    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'caixa_id' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'tipo_venda_id' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'operador_id' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'venda_status' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'cpf_cnpj' => ['type' => 'string', 'length' => 14, 'null' => true],
        'qtd_itens' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'valor_total' => ['type' => 'decimal', 'length' => '13,2', 'null' => false],
        'created' => 'datetime',
        'modified' => 'datetime',
        'status' => ['type' => 'integer', 'length' => 1, 'default' => '1', 'null' => false],
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'caixa_id' => 1,
                'tipo_venda_id' => 1,
                'operador_id' => 1,
                'venda_status' => 1,
                'cpf_cnpj' => null,
                'qtd_itens' => 1,
                'valor_total' => 1.10,
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => 1,
            ],
            [
                'id' => 2,
                'caixa_id' => 1,
                'tipo_venda_id' => 1,
                'operador_id' => 1,
                'venda_status' => 1,
                'cpf_cnpj' => null,
                'qtd_itens' => 1,
                'valor_total' => 1.20,
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => 1,
            ]
        ];
        parent::init();
    }
}
