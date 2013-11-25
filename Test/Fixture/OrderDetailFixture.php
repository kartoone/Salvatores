<?php
/**
 * OrderDetailFixture
 *
 */
class OrderDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'order_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'menu_item_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'comment' => 'the price of the item at the time the order was made'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_order_details_orders1_idx' => array('column' => 'order_id', 'unique' => 0),
			'fk_order_details_menu_items1_idx' => array('column' => 'menu_item_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'order_id' => 1,
			'menu_item_id' => 1,
			'price' => 1
		),
	);

}
