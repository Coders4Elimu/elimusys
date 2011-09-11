<?php
/* Teacher Fixture generated on: 2011-08-14 17:59:39 : 1313344779 */
class TeacherFixture extends CakeTestFixture {
	var $name = 'Teacher';

	var $fields = array(
		'TeacherID' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'comment' => 'Primary key column for Teacher table'),
		'SchoolID' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Column name for school id', 'charset' => 'latin1'),
		'FirstName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Last Name for teachesr', 'charset' => 'latin1'),
		'LastName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Middle Name for teachers', 'charset' => 'latin1'),
		'MiddleName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Contact numbers for the teachers', 'charset' => 'latin1'),
		'Phone' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 15, 'comment' => 'Date of birth for the teachers'),
		'dob' => array('type' => 'date', 'null' => false, 'default' => NULL, 'comment' => 'Any additional Information that may be needed'),
		'Details' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Any additional information that may be required', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'TeacherID', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'TeacherID' => 1,
			'SchoolID' => 'Lorem ipsum dolor sit amet',
			'FirstName' => 'Lorem ipsum dolor sit amet',
			'LastName' => 'Lorem ipsum dolor sit amet',
			'MiddleName' => 'Lorem ipsum dolor sit amet',
			'Phone' => 1,
			'dob' => '2011-08-14',
			'Details' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>