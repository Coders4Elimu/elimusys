<?php
/* Student Fixture generated on: 2011-08-13 23:59:31 : 1313279971 */
class StudentFixture extends CakeTestFixture {
	var $name = 'Student';

	var $fields = array(
		'StudentID' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'comment' => 'unique student id'),
		'SchoolID' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Registered school id', 'charset' => 'latin1'),
		'FirstName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'First Name of student', 'charset' => 'latin1'),
		'LastName' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Last Name of students', 'charset' => 'latin1'),
		'MiddleName' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Middle name of students', 'charset' => 'latin1'),
		'Gender' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Gender status of students', 'charset' => 'latin1'),
		'dob' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date of Birth for students', 'charset' => 'latin1'),
		'Details' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Any additional Information that may be required', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'StudentID', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'StudentID' => 1,
			'SchoolID' => 'Lorem ipsum dolor sit amet',
			'FirstName' => 'Lorem ipsum dolor sit amet',
			'LastName' => 'Lorem ipsum dolor sit amet',
			'MiddleName' => 'Lorem ipsum dolor sit amet',
			'Gender' => 'Lorem ipsum dolor sit amet',
			'dob' => 'Lorem ipsum dolor sit amet',
			'Details' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>