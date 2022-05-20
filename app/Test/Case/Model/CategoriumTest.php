<?php
App::uses('Categoria', 'Model');

/**
 * Categorium Test Case
 */
class CategoriaTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categorium = ClassRegistry::init('Categoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categorium);

		parent::tearDown();
	}

}
