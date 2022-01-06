<?php

class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Sqlite',
        'persistent' => false,
        'database' => '../../sqlite/database.sqlite',
        'prefix' => '',
        'encoding' => 'utf8'
    );
    public $test = array(
        'datasource' => 'Database/Sqlite',
        'persistent' => false,
        'database' => '../../sqlite/databaseteste.sqlite',
        'prefix' => '',
        'encoding' => 'utf8'
    );

}
