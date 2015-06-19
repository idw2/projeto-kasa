<?php
App::uses('Structure', 'Model');

/**
 * Structure Test Case
 *
 */
class StructureTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.structure'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Structure = ClassRegistry::init('Structure');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Structure);

		parent::tearDown();
	}

}
