<?php
/* Schools Test cases generated on: 2011-08-16 18:56:18 : 1313520978*/
App::import('Controller', 'Schools');

class TestSchoolsController extends SchoolsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SchoolsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.school', 'app.schoolsaddress', 'app.address', 'app.parentsaddress', 'app.guardian', 'app.studentparent', 'app.student', 'app.studentsaddress', 'app.studentsclass', 'app.schoolstaffaddress', 'app.schoolstaff', 'app.teachersaddress', 'app.teacher');

	function startTest() {
		$this->Schools =& new TestSchoolsController();
		$this->Schools->constructClasses();
	}

	function endTest() {
		unset($this->Schools);
		ClassRegistry::flush();
	}

}
?>