<?php

App::uses('AppModel', 'Model');

class VendaItem extends AppModel {

    public $useTable = 'venda_itens';
    public $belongsTo = [
        'Venda'
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

        if (Hash::get($params, 'VendaItem.id')) {
            $paramsOption['conditions'][] = Hash::get($params, 'VendaItem.id');
        }

        return $paramsOption;
    }

}
