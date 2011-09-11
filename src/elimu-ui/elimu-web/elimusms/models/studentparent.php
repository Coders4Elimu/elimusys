<?php
class Studentparent extends AppModel {
	var $name = 'Studentparent';
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
		'OwnerStudentProfileGuardian' => array(
			'className' => 'Guardian',
			'foreignKey' => 'ParentID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>