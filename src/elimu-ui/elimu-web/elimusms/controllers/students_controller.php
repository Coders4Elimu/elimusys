<?php
class StudentsController extends AppController {

	var $name = 'Students';

	function index($id=null) {
		$this->Student->recursive = -1;
		//The List of existing school from database
		$this->set('schoolOptions', $this->Student->StudentCurrentSchool->find('list', array('fields'=>array('StudentCurrentSchool.SchoolID','StudentCurrentSchool.Name'))));
		$this->setupViewListOptions();
		$this->set('students', $this->paginate());
		
		
	}

	function view($id = null) 
	{
		if (!$id) 
		{
			$this->Session->setFlash(__('This student does not exists!', true));
			$this->redirect(array('action' => 'index'));
		}
		$student = $this->Student->read(null, $id);
		$studentAddress = $this->Student->MyStudentAddress->MyStudentProfileAddress->read(null, $student['MyStudentAddress']['AddressID']);
		$student['MyStudentProfileAddress'] = $studentAddress['MyStudentProfileAddress'] ;
		$this->set('student', $student );
		$this->setupViewListOptions();
	}
	
	function setupViewListOptions()
	{
		$this->set('schoolOptions', $this->Student->StudentCurrentSchool->find('list', array('fields'=>array('StudentCurrentSchool.SchoolID','StudentCurrentSchool.Name'))));
		$this->set('genderOptions', array(0=>'Male',1=>'Female'));
	}

	function add() 
	{
		if (!empty($this->data)) 
		{
			$this->Student->create();
			$this->Student->MyStudentAddress->create();
			$this->Student->MyStudentAddress->MyStudentProfileAddress->create();
			$saveOK = false;
			if ($this->Student->save($this->data)) 
			{
				$this->data['MyStudentAddress']['StudentID']=$this->Student->id;
				if($this->Student->MyStudentAddress->MyStudentProfileAddress->save($this->data['MyStudentProfileAddress']))
				{
					$this->data['MyStudentAddress']['AddressID']=$this->Student->MyStudentAddress->MyStudentProfileAddress->id;
					if($this->Student->MyStudentAddress->save($this->data))
					{
						$saveOK = true;
						$this->Session->setFlash(__('The new student information has been saved.', true));
						$this->redirect(array('action' => 'view', $this->Student->id));
					}
				}
	
			} 
			else if(!$saveOK)
			{
				$this->Session->setFlash(__('The student could not be saved. Please, check for errors and try again.', true));
			}
			
			
		}
		//debug($this->data);
		//The List of existing school from database to populate selection box
		$this->setupViewListOptions();
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash(__('This student does not exist!', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) 
		{
			$this->Student->create();
			$this->Student->MyStudentAddress->create();
			$this->Student->MyStudentAddress->MyStudentProfileAddress->create();
			$saveOK = false;
			$this->Student->id = $id;
			if ($this->Student->save($this->data)) 
			{
				$this->data['MyStudentAddress']['StudentID']=$this->Student->id;
				if($this->Student->MyStudentAddress->MyStudentProfileAddress->save($this->data['MyStudentProfileAddress']))
				{
					$this->data['MyStudentAddress']['AddressID']=$this->Student->MyStudentAddress->MyStudentProfileAddress->id;
					if($this->Student->MyStudentAddress->save($this->data))
					{
						$saveOK = true;
						$this->Session->setFlash(__('The student information has been updated', true));
						$this->redirect(array('action' => 'view', $this->Student->id));
					}
				}

			} 
			else if(!$saveOK)
			{
				$this->Session->setFlash(__('The student information could not be updated. Please, try again.', true));
			}
		}
		if (empty($this->data)) 
		{
			$this->data = $this->Student->read(null, $id);
			$studentAddress = $this->Student->MyStudentAddress->MyStudentProfileAddress->read(null, $this->data['MyStudentAddress']['AddressID']);
			$this->data['MyStudentProfileAddress'] = $studentAddress['MyStudentProfileAddress'] ;
			#debug($this->data);
		}
		$this->setupViewListOptions();
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for student', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Student->delete($id)) {
			$this->Session->setFlash(__('Student deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Student was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Student->recursive = 0;
		$this->set('students', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid student', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('student', $this->Student->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Student->create();
			if ($this->Student->save($this->data)) {
				$this->Session->setFlash(__('The student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid student', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Student->save($this->data)) {
				$this->Session->setFlash(__('The student has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Student->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for student', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Student->delete($id)) {
			$this->Session->setFlash(__('Student deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Student was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>