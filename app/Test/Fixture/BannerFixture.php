<?php
/**
 * BannerFixture
 *
 */
class BannerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1', 'key' => 'primary'),
		'propertie_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'photo_file_name' => array('type' => 'binary', 'null' => true, 'default' => null),
		'status' => array('type' => 'string', 'null' => true, 'default' => '0', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'position' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
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
			'id' => '557b5343-d448-409f-ae05-01f8d56dfdae',
			'propertie_id' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-06-12 23:46:43',
			'modified' => '2015-06-12 23:46:43',
			'photo_file_name' => 'Lorem ipsum dolor sit amet',
			'status' => 'Lorem ipsum dolor sit ame',
			'position' => 1
		),
	);

}
