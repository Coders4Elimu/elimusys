<?php 
	#Enter the breadcrumbs path 
	$this->Html->addCrumb(__('View Students', true), '/students');
	$this->Html->addCrumb(__('Add School', true), '/schools/add');
?>
<div id="content">
	<div class="students form">
		<?php echo $this->Form->create('Student');?>
			<fieldset>
		 		<legend><?php __('Add a Student'); ?></legend>
			<?php
				echo $this->Form->input('SchoolID', array('label'=>'Current School', 'options'=>$schoolOptions));
				echo $this->Form->input('FirstName', array('label'=>'Student\'s First Name'));
				echo $this->Form->input('LastName', array('label'=>'Student\'s Last Name'));
				echo $this->Form->input('MiddleName', array('label'=>'Student\'s Middle Name'));
				echo $this->Form->input('Gender', array('label'=>'Gender', 'options'=>$genderOptions));
				echo $this->Form->input('dob',array('label'=>'Student\'s Date Of Birth', 'minYear'=>date('Y')-100, 'maxYear'=>date('Y')));
				echo $this->Form->input('Details',array('type'=>'textarea','label'=>'Student Details'));
				//Student Address
				echo $this->Form->input('MyStudentProfileAddress.AddressLine1', array('label'=>'Student\'s Address Line 1','div'=>'required'));
				echo $this->Form->input('MyStudentProfileAddress.AddressLine2',array('label'=>'Student\'s Address Line 2'));
				echo $this->Form->input('MyStudentProfileAddress.City',array('label'=>'Student\'s Address City','div'=>'required'));
				echo $this->Form->input('MyStudentProfileAddress.Country', array('label'=>'Student\'s Address Country','div'=>'required'));
				echo $this->Form->input('MyStudentProfileAddress.PostalCode',array('label'=>'Student\'s Address Postal Code','div'=>'required'));
				echo $this->Form->input('MyStudentProfileAddress.Details',array('type'=>'textarea','label'=>'Student\'s Address Notes'));
				echo $this->Form->input('MyAddress.AddressID',array('type'=>'hidden'));
				echo $this->Form->input('MyAddress.SchoolID',array('type'=>'hidden'));
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
	</div>
</div>

<div id="column">
	<div class="subnav">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('View Students', true), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('View All Schools', true), array('controller' => 'schools', 'action' => 'index' )); ?> </li>
			<li><?php echo $this->Html->link(__('Add A Class', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List My Classes', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('View My Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		</ul>
	</div>
</div>