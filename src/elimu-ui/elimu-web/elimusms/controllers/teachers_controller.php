<?php
class TeachersController extends AppController {

	var $name = 'Teachers';
	var $components = array('RequestHandler');

	function index() {
		$this->Teacher->recursive = 0;
		$this->set('teachers', $this->paginate());
		$this->setupViewListOptions();
	}
	
	function setupViewListOptions()
	{
		$this->set('schoolOptions', $this->Teacher->TeacherCurrentSchool->find('list', array('fields'=>array('TeacherCurrentSchool.SchoolID','TeacherCurrentSchool.Name'))));
		$this->set('genderOptions', array(0=>'Male',1=>'Female'));
	}
	
	function view($id = null) 
	{
		if (!$id) 
		{
			$this->Session->setFlash(__('Invalid teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		
		$teacher = $this->Teacher->read(null, $id);
		$teacherAddress = $this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->read(null, $teacher['MyTeacherAddress']['AddressID']);
		$teacher['MyTeacherProfileAddress'] = $teacherAddress['MyTeacherProfileAddress'] ;
		$this->set('teacher', $teacher );
		$this->setupViewListOptions();
	}

	function add() 
	{
		if (!empty($this->data)) 
		{
			$this->Teacher->create();
			$this->Teacher->MyTeacherAddress->create();
			$this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->create();
			$saveOK = false;
			if ($this->Teacher->save($this->data)) 
			{
				$this->data['MyTeacherAddress']['TeacherID']=$this->Teacher->id;
				if($this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->save($this->data['MyTeacherProfileAddress']))
				{
					$this->data['MyTeacherAddress']['AddressID']=$this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->id;
					if($this->Teacher->MyTeacherAddress->save($this->data))
					{
						$saveOK = true;
						$this->Session->setFlash(__('The new teacher information has been saved.', true));
						$this->redirect(array('action' => 'view', $this->Teacher->id));
					}
				}
	
			} 
			else if(!$saveOK)
			{
				$this->Session->setFlash(__('The teacher could not be saved. Please, check for errors and try again.', true));
			}
			
			
		}
		$this->setupViewListOptions();
	}

	function edit($id = null) 
	{
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash(__('This Teacher does not exist', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) 
		{
			$this->Teacher->create();
			$this->Teacher->MyTeacherAddress->create();
			$this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->create();
			$saveOK = false;
			if ($this->Teacher->save($this->data)) 
			{
				$this->data['MyTeacherAddress']['TeacherID']=$this->Teacher->id;
				if($this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->save($this->data['MyTeacherProfileAddress']))
				{
					$this->data['MyTeacherAddress']['AddressID']=$this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->id;
					if($this->Teacher->MyTeacherAddress->save($this->data))
					{
						$saveOK = true;
						$this->Session->setFlash(__('The teacher information has been updated.', true));
						$this->redirect(array('action' => 'view', $this->Teacher->id));
					}
				}
	
			} 
			else if(!$saveOK)
			{
				$this->Session->setFlash(__('The teacher could not be updated. Please, check for errors and try again.', true));
			}
			
		}
		if (empty($this->data)) 
		{
			$this->data = $this->Teacher->read(null, $id);
			$teacherAddress = $this->Teacher->MyTeacherAddress->MyTeacherProfileAddress->read(null, $this->data['MyTeacherAddress']['AddressID']);
			$this->data['MyTeacherProfileAddress'] = $teacherAddress['MyTeacherProfileAddress'] ;
		}
		$this->setupViewListOptions();
		
	}

	function delete($id = null) 
	{
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teacher', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Teacher->delete($id)) {
			$this->Session->setFlash(__('Teacher deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teacher was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Teacher->recursive = 0;
		$this->set('teachers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('teacher', $this->Teacher->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Teacher->create();
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The teacher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.', true));
			}
		}
		$ownerTeacherSchools = $this->Teacher->OwnerTeacherSchool->find('list');
		$this->set(compact('ownerTeacherSchools'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid teacher', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Teacher->save($this->data)) {
				$this->Session->setFlash(__('The teacher has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The teacher could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Teacher->read(null, $id);
		}
		$ownerTeacherSchools = $this->Teacher->OwnerTeacherSchool->find('list');
		$this->set(compact('ownerTeacherSchools'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for teacher', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Teacher->delete($id)) {
			$this->Session->setFlash(__('Teacher deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Teacher was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>