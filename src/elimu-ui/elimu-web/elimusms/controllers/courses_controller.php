<?php
class CoursesController extends AppController {

	var $name = 'Courses';

	function index() {
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('course', $this->Course->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Course->create();
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Course->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Course->delete($id)) {
			$this->Session->setFlash(__('Course deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Course->recursive = 0;
		$this->set('courses', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('course', $this->Course->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Course->create();
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid course', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Course->save($this->data)) {
				$this->Session->setFlash(__('The course has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The course could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Course->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for course', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Course->delete($id)) {
			$this->Session->setFlash(__('Course deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Course was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>