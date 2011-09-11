<?php
class Subject extends AppModel {
	var $name = 'Subject';
	var $primaryKey = 'SubjectID';
	var $displayField = 'Name';
	var $validate = array(
		'Name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Provide a general course topic',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Classes' => array(
			'className' => 'Course',
			'foreignKey' => 'SubjectID',
			'dependent'=>true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>