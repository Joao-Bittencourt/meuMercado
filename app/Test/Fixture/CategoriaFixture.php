<?php

class CategoriaFixture extends CakeTestFixture {

    public $fields = [
        'id' => ['type' => 'integer', 'key' => 'primary'],
        'nome' => ['type' => 'string', 'length' => 255, 'null' => false],
        'created' => 'datetime',
        'modified' => 'datetime',
        'status' => ['type' => 'integer', 'length' => 1, 'default' => '1', 'null' => false],
    ];

    public function init() {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'categoria 1',
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => '1',
            ],
            [
                'id' => 2,
                'nome' => 'categiria 2',
                'created' => '2022-05-29 23:57:07',
                'modified' => '2022-05-29 23:57:07',
                'status' => '1',
            ]
        ];
        parent::init();
    }

}
