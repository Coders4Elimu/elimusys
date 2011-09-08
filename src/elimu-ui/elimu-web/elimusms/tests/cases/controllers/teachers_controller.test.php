<?php
/* Teachers Test cases generated on: 2011-09-08 16:21:24 : 1315498884*/
App::import('Controller', 'Teachers');

class TestTeachersController extends TeachersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TeachersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.teacher', 'app.school', 'app.schoolsaddress', 'app.address', 'app.schoolstaff', 'app.schoolstaffaddress', 'app.student', 'app.studentsaddress', 'app.studentsclass', 'app.course', 'app.studentparent', 'app.guardian', 'app.parentsaddress', 'app.teachersaddress');

	function startTest() {
		$this->Teachers =& new TestTeachersController();
		$this->Teachers->constructClasses();
	}

	function endTest() {
		unset($this->Teachers);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>