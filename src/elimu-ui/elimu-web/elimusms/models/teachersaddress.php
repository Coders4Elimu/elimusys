<?php
class Teachersaddress extends AppModel {
	var $name = 'Teachersaddress';
	var $primaryKey = 'ID';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'MyTeacherProfileInformation' => array(
			'className' => 'Teacher',
			'foreignKey' => 'TeacherID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MyTeacherProfileAddress' => array(
			'className' => 'Address',
			'foreignKey' => 'AddressID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>