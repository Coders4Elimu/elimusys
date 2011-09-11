<?php
class Studentsaddress extends AppModel {
	var $name = 'Studentsaddress';
	var $primaryKey = 'ID';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'MyStudentProfileInformation' => array(
			'className' => 'Student',
			'foreignKey' => 'StudentID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MyStudentProfileAddress' => array(
			'className' => 'Address',
			'foreignKey' => 'AddressID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>