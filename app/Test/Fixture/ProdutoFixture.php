<?php

class ProdutoFixture extends CakeTestFixture {

   public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'nome' => ['type' => 'string', 'length' => 255, 'null' => false],
        'tipo' => ['type' => 'string', 'length' => 255, 'null' => false],
        'valor' => ['type' => 'decimal', 'length' => '13,2', 'null' => false],
        'estoque' => ['type' => 'decimal', 'length' => '13,2', 'null' => false],
//        'status' => ['type' => 'integer', 'length' => 1, 'default' => '1', 'null' => false],
        'created_at' => 'datetime',
//        'created' => 'datetime',
//        'modified' => 'datetime'
        'updated_at' => 'datetime'
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'categoria_id' => 1,
                'preco' => 1.10,
                'descricao' => 'descricao test',
                'nome' => 'produto 1',
                'status' => 1,
                'nome_imagem' => '037a3c17476640f163f98f8c862ab6ce.png'
            ],
            [
                'id' => 2,
                'categoria_id' => 2,
                'preco' => 2.20,
                'descricao' => 'descricao test2',
                'nome' => 'produto 2',
                'status' => 1,
                'nome_imagem' => '037a3c17476640f163f98f8c862ab6ce.png'
            ]
        ];
        parent::init();
    }
}