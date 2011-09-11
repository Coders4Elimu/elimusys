<?php 
	#Enter the breadcrumbs path 
	$this->Html->addCrumb(__('View Students', true), '/students');
	$this->Html->addCrumb(__('Edit Student', true), '/schools/edit/' . $this->data['Student']['StudentID'] );
?>
<div id="content">
	<div class="students form">
		<?php echo $this->Form->create('Student');?>
			<fieldset>
		 		<legend><?php __('Edit Student'); ?></legend>
			<?php
				echo $this->Form->input('StudentID',array('type'=>'hidden'));
				echo $this->Form->input('SchoolID', array('label'=>'Current School', 'options'=>$schoolOptions));
				echo $this->Form->input('FirstName', array('label'=>'Student\'s First Name'));
				echo $this->Form->input('LastName', array('label'=>'Student\'s Last Name'));
				echo $this->Form->input('MiddleName', array('label'=>'Student\'s Middle Name'));
				echo $this->Form->input('Gender', array('label'=>'Gender', 'options'=>$genderOptions));
				echo $this->Form->input('dob',array('label'=>'Student\'s Date Of Birth', 'minYear'=>date('Y')-100, 'maxYear'=>date('Y')));
				echo $this->Form->input('Details',array('type'=>'textarea','label'=>'Student Details'));
				//School Address
				echo $this->Form->input('MyStudentProfileAddress.AddressLine1', array('label'=>'Student\'s Address Line 1'));
				echo $this->Form->input('MyStudentProfileAddress.AddressLine2',array('label'=>'Student\'s Address Line 2'));
				echo $this->Form->input('MyStudentProfileAddress.City',array('label'=>'Student\'s Address City'));
				echo $this->Form->input('MyStudentProfileAddress.Country', array('label'=>'Student\'Address Country'));
				echo $this->Form->input('MyStudentProfileAddress.PostalCode',array('label'=>'Student\'s Address Postal Code'));
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
			<li><?php echo $this->Html->link(__('View My Profile', true), array('action' => 'view',  $this->Form->value('Student.StudentID')));?></li>
			<li><?php echo $this->Html->link(__('Delete My Profile', true), array('action' => 'delete',  $this->Form->value('Student.StudentID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Student.StudentID'))); ?></li>
			<li><?php echo $this->Html->link(__('View Other Students', true), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('View My Current School', true), array('controller' => 'schools', 'action' => 'view', $this->data['Student']['SchoolID'] )); ?> </li>
			<li><?php echo $this->Html->link(__('Add A Class', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('View My Classes', true), array('controller' => 'courses', 'action' => 'list_student_classes', $this->Form->value('Student.StudentID'))); ?> </li>
			<li><?php echo $this->Html->link(__('View My Teachers', true), array('controller' => 'teachers', 'action' => 'list_student_teachers', $this->Form->value('Student.StudentID'))); ?> </li>
		</ul>
	</div>
</div>