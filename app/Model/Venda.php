<?php

App::uses('AppModel', 'Model');

class Venda extends AppModel {

    public $useTable = 'vendas';
    public $hasMany = [
        'VendaItem'
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

        if (Hash::get($params, 'Venda.id')) {
            $paramsOption['conditions'][] = Hash::get($params, 'Venda.id');
        }

        return $paramsOption;
    }

}
