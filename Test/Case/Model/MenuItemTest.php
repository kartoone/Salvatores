<?php
App::uses('MenuItem', 'Model');

/**
 * MenuItem Test Case
 *
 */
class MenuItemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.menu_item',
		'app.menu_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MenuItem = ClassRegistry::init('MenuItem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuItem);

		parent::tearDown();
	}

}
