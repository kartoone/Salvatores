<?php
/**
 * MenuItemFixture
 *
 */
class MenuItemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'menu_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'all menu items must belong to a category ... specifically the root category or sub category or sub-sub category where they should be displayed'),
		'order' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'order within the category or subcategory'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'this could be "10" pizza" ... you\'ve got to keep in mind where this is going to be displayed ... or it could be "Cheese Roll"', 'charset' => 'latin1'),
		'price' => array('type' => 'float', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_menu_items_menu_categories1_idx' => array('column' => 'menu_category_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'menu_category_id' => 1,
			'order' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'price' => 1
		),
	);

}
