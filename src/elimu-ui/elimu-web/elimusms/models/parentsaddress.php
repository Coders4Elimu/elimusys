<?php
class Parentsaddress extends AppModel {
	var $name = 'Parentsaddress';
	var $primaryKey = 'ID';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'OwnerIsAGuardian' => array(
			'className' => 'Guardian',
			'foreignKey' => 'ParentID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OwnerHasAGuardianAddress' => array(
			'className' => 'Address',
			'foreignKey' => 'AddressID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>