<?php
class Address extends AppModel {
	var $name = 'Address';
	var $primaryKey = 'AddressID';
	var $displayField = 'AddressLine1';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
		'AddressLine1' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => "Please provide an address!",
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		'City' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => "Please provide a City!",
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		
		),
		'Country' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => "Please provide a valid Country!",
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		'PostalCode' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => "Please provide a Postal Code!",
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			
		),
		
		
	);
	var $hasMany = array(
		'AddressOfSchool' => array(
			'className' => 'Schoolsaddress',
			'foreignKey' => 'AddressID',
			'dependent' => true,
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
	
function beforeSave(&$model)
	{
		#echo "<h5>Before Save Address</h5>";
		#debug($this->data);
		return TRUE;
	}

}
?>