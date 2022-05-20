<?php

App::uses('AppModel', 'Model');

/**
 * User Model
 *
 */
class User extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'email' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'informe um email',
            ),
        ),
        'name' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'informe um nome',
            ),
        ),
        'password' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'imforme uma senha'
            ),
        ),
    );

    public function beforeSave($options = array()) {
        if (!empty($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        }

        return true;
    }

}
