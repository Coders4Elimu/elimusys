<?php
class Studentsclass extends AppModel {
	var $name = 'Studentsclass';
	var $primaryKey = 'ID';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'OwnerStudentProfile' => array(
			'className' => 'Student',
			'foreignKey' => 'StudentID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OwnerStudentProfileClass' => array(
			'className' => 'Course',
			'foreignKey' => 'ClassID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>