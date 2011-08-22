<?php
/* Courses Test cases generated on: 2011-08-16 19:03:57 : 1313521437*/
App::import('Controller', 'Courses');

class TestCoursesController extends CoursesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CoursesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.course');

	function startTest() {
		$this->Courses =& new TestCoursesController();
		$this->Courses->constructClasses();
	}

	function endTest() {
		unset($this->Courses);
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