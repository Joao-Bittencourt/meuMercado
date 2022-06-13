<?php

App::uses('Categoria', 'Model');

class CategoriaTest extends CakeTestCase {

    public function setUp() {
        parent::setUp();
        $this->Categorium = ClassRegistry::init('Categoria');
    }

    public function tearDown() {
        unset($this->Categorium);

        parent::tearDown();
    }

}
