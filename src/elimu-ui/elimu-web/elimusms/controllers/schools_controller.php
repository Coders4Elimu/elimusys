<?php
class SchoolsController extends AppController {

	var $name = 'Schools';

	function index($id=null) {
		$this->School->recursive = 0;
		$languageOptions = array('0'=>'English', '1'=>'Francais');
		$this->set('languageOptions', $languageOptions);
		$this->set('schools', $this->paginate());
	}

	function view($id = null) 
	{
		if (!$id) 
		{
			$this->Session->setFlash(__('Invalid school', true));
			$this->redirect(array('action' => 'index'));
		}
		$school = $this->School->read(null, $id);
		$schoolAddress = $this->School->SchoolAddress->OfficialSchoolAddress->findByAddressid($school['SchoolAddress']['AddressID']);
		$school['Address']= $schoolAddress['OfficialSchoolAddress'];
		$this->set('school', $school);
		$this->set('languageOptions', array('0'=>'English', '1'=>'Francais','2'=>'Swahili'));
	}

	function add() 
	{
		if (!empty($this->data)) 
		{
			//debug($this->data);
			$this->School->create();
			$this->School->SchoolAddress->create();
			$this->School->SchoolAddress->OfficialSchoolAddress->create();
			$saveOK = false;
			if ($this->School->save($this->data)) 
			{
				//School info was saved let's check Address Data
				$this->data['SchoolAddress']['SchoolID']=$this->School->id;
				$address = $this->School->SchoolAddress->OfficialSchoolAddress->save($this->data['OfficialSchoolAddress']);
				if(!empty($address))
				{
					$this->data['SchoolAddress']['AddressID']=$this->School->SchoolAddress->OfficialSchoolAddress->id;
					//Save the SchoolAddress table data last
					if($this->School->SchoolAddress->save($this->data))
					{
						//debug($this->data);
						$this->Session->setFlash(__('The school and address information has been saved', true));
						$saveOK = true;
						$this->redirect(array('action' => 'view',$this->School->id));
					}
					
					
					
				}
				
			} 
			if(!$saveOK) 
			{
				$this->Session->setFlash(__('The school could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) 
	{
		
		if (!$id && empty($this->data)) 
		{
			$this->Session->setFlash(__('Invalid school', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) 
		{
			//debug($this->data);
			$this->School->create();
			$this->School->SchoolAddress->create();
			$this->School->SchoolAddress->OfficialSchoolAddress->create();
			$saveOK = false;
			$this->School->id = $id;
			if ($this->School->save($this->data)) 
			{
				//School info was saved let's check Address Data
				$this->data['SchoolAddress']['SchoolID']=$this->School->id;
				$address = $this->School->SchoolAddress->OfficialSchoolAddress->save($this->data['OfficialSchoolAddress']);
				if(!empty($address))
				{
					$this->data['SchoolAddress']['AddressID']=$this->School->SchoolAddress->OfficialSchoolAddress->id;
					//Save the SchoolAddress table data last
					if($this->School->SchoolAddress->save($this->data))
					{
						//debug($this->data);
						$this->Session->setFlash(__('The school and address information has been saved', true));
						$saveOK = true;
					}
					
					$this->redirect(array('action' => 'view',$this->School->id));
					
				}
				
			} 
			if(!$saveOK) 
			{
				$this->Session->setFlash(__('The school could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) 
		{
			$this->data = $this->School->read(null, $id);
			$schoolAddress = $this->School->SchoolAddress->OfficialSchoolAddress->read(null, $this->data['SchoolAddress']['AddressID']);
			$this->data['OfficialSchoolAddress'] = $schoolAddress['OfficialSchoolAddress'] ;
			#debug($this->data);
		}
		$this->set('languageOptions', array('0'=>'English', '1'=>'Francais','2'=>'Swahili'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for school', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->School->delete($id)) {
			$this->Session->setFlash(__('School deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('School was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->School->recursive = 0;
		$this->set('schools', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid school', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('school', $this->School->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->School->create();
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(__('The school has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid school', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(__('The school has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The school could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->School->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for school', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->School->delete($id)) {
			$this->Session->setFlash(__('School deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('School was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>