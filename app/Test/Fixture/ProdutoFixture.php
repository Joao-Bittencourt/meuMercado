<?php

class ProdutoFixture extends CakeTestFixture {

    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'categoria_id' => ['type' => 'integer', 'length' => 11, 'null' => false],
        'nome' => ['type' => 'string', 'length' => 255, 'null' => false],
        'cod_gtin' => ['type' => 'string', 'length' => 15, 'null' => true],
        'cod_cest' => ['type' => 'string', 'length' => 7, 'null' => true],
        'ncm' => ['type' => 'string', 'length' => 8, 'null' => true],
        'descricao' => ['type' => 'string', 'length' => 255, 'null' => true],
        'unidade_medida' => ['type' => 'string', 'length' => 5, 'null' => true],
        'valor_unitario' => ['type' => 'decimal', 'length' => '13,2', 'null' => false],
        'situacao_tributaria' => ['type' => 'string', 'length' => 2, 'null' => false],
        'ind_arredondamento' => ['type' => 'string', 'length' => 1, 'null' => false],
        'ind_producao' => ['type' => 'string', 'length' => 1, 'null' => false],
        'created' => 'datetime',
        'modified' => 'datetime',
        'status' => ['type' => 'integer', 'length' => 1, 'default' => '1', 'null' => false],
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'categoria_id' => 1,
                'nome' => 'produto 1',
                'cod_gtin' => '037a3c17476641',
                'cod_cest' => '',
                'ncm' => '96081000',
                'descricao' => 'descricao test',
                'unidade_medida' => 'UN',
                'valor_unitario' => 1.10,
                'situacao_tributaria' => 'T',
                'ind_arredondamento' => 'A',
                'ind_producao' => 'T',
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => '1',
            ],
            [
                'id' => 2,
                'categoria_id' => 1,
                'nome' => 'produto 2',
                'cod_gtin' => '037a3c17476640',
                'cod_cest' => '',
                'ncm' => '96081000',
                'descricao' => 'descricao test',
                'unidade_medida' => 'UN',
                'valor_unitario' => 1.20,
                'situacao_tributaria' => 'T',
                'ind_arredondamento' => 'A',
                'ind_producao' => 'T',
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => '1',
            ]
        ];
        parent::init();
    }
}
