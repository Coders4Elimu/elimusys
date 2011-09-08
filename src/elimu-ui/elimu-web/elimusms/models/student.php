<?php
class Student extends AppModel {
	var $name = 'Student';
	var $primaryKey = 'StudentID';
	var $displayField = 'FirstName';
	var $validate = array(
		'FirstName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide a first name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphanumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i') ,
				'message' => 'Please provide a valid first name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'LastName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please provide a last name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => 'Please provide a valid last name',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Gender' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select a gender value',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dob' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Please provide a valid birth date',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'StudentCurrentSchool' => array(
			'className' => 'School',
			'foreignKey' => 'SchoolID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $hasOne = array(
		'MyStudentAddress' => array(
			'className' => 'Studentsaddress',
			'foreignKey' => 'StudentID',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);
	
	var $hasMany = array(
		
		'MyStudentClasses' => array(
			'className' => 'Studentsclass',
			'foreignKey' => 'StudentID',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'MyStudentParents' => array(
			'className' => 'Studentparent',
			'foreignKey' => 'StudentID',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);



}
?>