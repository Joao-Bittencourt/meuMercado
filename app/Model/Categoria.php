<?php

App::uses('AppModel', 'Model');

class Categoria extends AppModel {

    public $useTable = 'categorias';
    public $displayField = 'Categoria.nome';
    public $hasMany = [
        'Produto'
    ];
    public $validate = [];

    public function findAllOrconditions($params = []) {

        $paramsOption = [];

        if (!empty($params)) {
            $paramsOption = $this->buildParamsConditions($params);
        }

        return $this->find('all', $paramsOption);
    }

    public function buildParamsConditions($params = []) {
        $paramsOption = [];

        if (Hash::get($params, 'Categoria.id')) {
            $paramsOption['conditions'][] = Hash::get($params, 'Categoria.id');
        }

        if (Hash::get($params, 'Categoria.nome')) {
            $paramsOption['conditions'][]['Categoria.nome LIKE'] = "%" . Hash::get($params, 'Categoria.nome') . "%";
        }

        return $paramsOption;
    }

}
