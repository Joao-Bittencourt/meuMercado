<?php

App::uses('Categoria', 'Model');

class CategoriaTest extends CakeTestCase {

    public function setUp() {
        parent::setUp();
        $this->Categoria = ClassRegistry::init('Categoria');
    }

    public function tearDown() {
        unset($this->Categoria);

        parent::tearDown();
    }

    public function testFindAllOrconditionsWhitoutConditions() {
        $this->markTestIncomplete('testAdd not implemented.');
//        $results = $this->Categoria->findAllOrconditions();
//        
//        $countResults = (int) count($results);
//        
//        $this->assertEquals(2, $countResults);
    }

}
