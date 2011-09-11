<?php
class Course extends AppModel {
	var $name = 'Course';
	var $useTable = 'courses';
	var $primaryKey = 'ClassID';
	var $displayField = 'Name';
	var $validate = array(
		'TeacherID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Please select a Teacher to teach this class',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		'SubjectID' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a valid class name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Code' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide a valid Class Code',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Details' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide a valid course description',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		
	);
	
	
	var $hasOne = array(
		
	);
	
	var $belongsTo = array(
		'MasterSubject' => array(
			'className' => 'Subject',
			'foreignKey' => 'SubjectID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

}
?>