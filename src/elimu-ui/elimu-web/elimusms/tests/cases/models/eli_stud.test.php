<?php
/* EliStud Test cases generated on: 2011-08-10 20:14:33 : 1313007273*/
App::import('Model', 'EliStud');

class EliStudTestCase extends CakeTestCase {
	function startTest() {
		$this->EliStud =& ClassRegistry::init('EliStud');
	}

	function endTest() {
		unset($this->EliStud);
		ClassRegistry::flush();
	}

}
?>