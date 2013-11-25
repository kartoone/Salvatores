<?php
App::uses('MenuCategory', 'Model');

/**
 * MenuCategory Test Case
 *
 */
class MenuCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.menu_category',
		'app.menu_item'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MenuCategory = ClassRegistry::init('MenuCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuCategory);

		parent::tearDown();
	}

}
