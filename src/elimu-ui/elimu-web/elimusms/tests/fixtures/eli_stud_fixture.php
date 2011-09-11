<?php
/* EliStud Fixture generated on: 2011-08-10 20:14:25 : 1313007265 */
class EliStudFixture extends CakeTestFixture {
	var $name = 'EliStud';
	var $table = 'eli_stud';

	var $fields = array(
		'stud_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'comment' => 'unique student id'),
		'sch_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Registered school id', 'charset' => 'latin1'),
		'f_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'First Name of student', 'charset' => 'latin1'),
		'l_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Last Name of students', 'charset' => 'latin1'),
		'm_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Middle name of students', 'charset' => 'latin1'),
		'gnd' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Gender status of students', 'charset' => 'latin1'),
		'dob' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Date of Birth for students', 'charset' => 'latin1'),
		'note' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => 'Any additional Information that may be required', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'stud_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'stud_id' => 1,
			'sch_id' => 'Lorem ipsum dolor sit amet',
			'f_name' => 'Lorem ipsum dolor sit amet',
			'l_name' => 'Lorem ipsum dolor sit amet',
			'm_name' => 'Lorem ipsum dolor sit amet',
			'gnd' => 'Lorem ipsum dolor sit amet',
			'dob' => 'Lorem ipsum dolor sit amet',
			'note' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>