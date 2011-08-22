<?php
class Subject extends AppModel {
	var $name = 'Subject';
	var $primaryKey = 'SubjectID';
	var $displayField = 'Name';
	var $validate = array(
		'Name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'SubjectCourses' => array(
			'className' => 'Course',
			'foreignKey' => 'SubjectID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>