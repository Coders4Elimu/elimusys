<?php
/* Students Test cases generated on: 2011-09-07 15:54:30 : 1315410870*/
App::import('Controller', 'Students');

class TestStudentsController extends StudentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StudentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.student', 'app.studentsaddress', 'app.address', 'app.schoolsaddress', 'app.school', 'app.schoolstaff', 'app.schoolstaffaddress', 'app.teacher', 'app.teachersaddress', 'app.course', 'app.studentsclass', 'app.studentparent', 'app.guardian', 'app.parentsaddress');

	function startTest() {
		$this->Students =& new TestStudentsController();
		$this->Students->constructClasses();
	}

	function endTest() {
		unset($this->Students);
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