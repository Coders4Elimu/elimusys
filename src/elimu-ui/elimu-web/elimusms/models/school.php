<?php
class School extends AppModel {
	var $name = 'School';
	var $primaryKey = 'SchoolID';
	var $displayField = 'Name';
	var $validate = array(
		'LanguageID' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => "Please select your school's primary language",
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Name' => array(
			
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide a school name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Phone' => array(
			
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide a Phone Number',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'DateFounded' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Please provide the date the school was founded',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	var $hasOne = array(
		'SchoolAddress' => array(
			'className' => 'Schoolsaddress',
			'foreignKey' => 'SchoolID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	var $hasMany = array(
		
		'TheSchoolWorkStaffers' => array(
			'className' => 'Schoolstaff',
			'foreignKey' => 'SchoolID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TheSchoolTeachers' => array(
			'className' => 'Teacher',
			'foreignKey' => 'SchoolID',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>