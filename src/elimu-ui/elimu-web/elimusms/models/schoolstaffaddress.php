<?php
class Schoolstaffaddress extends AppModel {
	var $name = 'Schoolstaffaddress';
	var $primaryKey = 'ID';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'OwnerStaffer' => array(
			'className' => 'Schoolstaff',
			'foreignKey' => 'SchoolStaffID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OwnerStafferAddress' => array(
			'className' => 'Address',
			'foreignKey' => 'AddressID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>