<?php
/**
 * DetailFixture
 *
 */
class DetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'propertie_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'price' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'area' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bedrooms' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'bathrooms' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => '55789868-562c-41ad-9953-0b30d56dfdae',
			'propertie_id' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-06-10 22:04:56',
			'modified' => '2015-06-10 22:04:56',
			'price' => 1,
			'area' => 'Lorem ipsum dolor sit amet',
			'bedrooms' => 1,
			'bathrooms' => 1
		),
	);

}
