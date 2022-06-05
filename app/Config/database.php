<?php

class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'meu_mercado',
        'prefix' => '',
        'encoding' => 'utf8',
    );
    public $test = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'test_meu_mercado',
        'prefix' => '',
            //'encoding' => 'utf8',
    );

    public function __construct() {
       
        $arrayConfig = [
            'datasource' => 'Database/Mysql',
            'persistent' => false,
            'host' => isset($_ENV['DB_APP_HOST']) ? $_ENV['DB_APP_HOST'] : 'localhost',
            'port' => isset($_ENV['DB_APP_PORT']) ? $_ENV['DB_APP_PORT'] : '3306',
            'login' => isset($_ENV['DB_APP_USER']) ? $_ENV['DB_APP_USER'] : 'login',
            'password' => isset($_ENV['DB_APP_PASSWORD']) ? $_ENV['DB_APP_PASSWORD'] : 'password',
            'database' => isset($_ENV['DB_APP_DATABASE']) ? $_ENV['DB_APP_DATABASE'] : 'database',
            'prefix' => '',
            'encoding' => 'utf8',
        ];
              
        $this->default = $arrayConfig; 
    }

}
