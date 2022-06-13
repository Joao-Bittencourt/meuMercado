<?php

class VendaItemFixture extends CakeTestFixture {

    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'venda_id' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'produto_id' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'n_item' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'preco' => ['type' => 'decimal', 'length' => '13,2', 'null' => false],
        'qtd' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'valor_total' => ['type' => 'decimal', 'length' => '13,2', 'null' => false],
        'created' => 'datetime',
        'modified' => 'datetime',
        'status' => ['type' => 'integer', 'length' => 1, 'default' => '1', 'null' => false],
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'venda_id' => 1,
                'produto_id' => 1,
                'n_item' => 1,
                'preco' => 1.10,
                'qtd' => 1,
                'valor_total' => 1.10,
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => 1,
            ],
            [
                'id' => 2,
                'venda_id' => 2,
                'produto_id' => 2,
                'n_item' => 1,
                'preco' => 1.20,
                'qtd' => 1,
                'valor_total' => 1.20,
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => 1,
            ]
        ];
        parent::init();
    }

}
