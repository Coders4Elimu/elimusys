<?php
class SchoolsaddressesController extends AppController {

	var $name = 'Schoolsaddresses';

	function index() {
		$this->Schoolsaddress->recursive = 0;
		$this->set('schoolsaddresses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid schoolsaddress', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('schoolsaddress', $this->Schoolsaddress->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Schoolsaddress->create();
			if ($this->Schoolsaddress->save($this->data)) {
				$this->Session->setFlash(__('The schoolsaddress has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schoolsaddress could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid schoolsaddress', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Schoolsaddress->save($this->data)) {
				$this->Session->setFlash(__('The schoolsaddress has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schoolsaddress could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Schoolsaddress->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for schoolsaddress', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Schoolsaddress->delete($id)) {
			$this->Session->setFlash(__('Schoolsaddress deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Schoolsaddress was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Schoolsaddress->recursive = 0;
		$this->set('schoolsaddresses', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid schoolsaddress', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('schoolsaddress', $this->Schoolsaddress->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Schoolsaddress->create();
			if ($this->Schoolsaddress->save($this->data)) {
				$this->Session->setFlash(__('The schoolsaddress has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schoolsaddress could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid schoolsaddress', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Schoolsaddress->save($this->data)) {
				$this->Session->setFlash(__('The schoolsaddress has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The schoolsaddress could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Schoolsaddress->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for schoolsaddress', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Schoolsaddress->delete($id)) {
			$this->Session->setFlash(__('Schoolsaddress deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Schoolsaddress was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>