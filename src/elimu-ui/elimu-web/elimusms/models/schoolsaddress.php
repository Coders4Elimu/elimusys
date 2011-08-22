<?php
class Schoolsaddress extends AppModel {
	var $name = 'Schoolsaddress';
	var $primaryKey = 'ID';
	var $displayField = 'Details';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'OwnerSchool' => array(
			'className' => 'School',
			'foreignKey' => 'SchoolID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OwnerSchoolAddress' => array(
			'className' => 'Address',
			'foreignKey' => 'AddressID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>