<?php 
	$this->Html->addCrumb(__('View Teachers', true), '/students');
?>
<div id="content">
	<div class="teachers form">
	<?php echo $this->Form->create('Teacher');?>
		<fieldset>
	 		<legend><?php __('Create Teacher'); ?></legend>
		<?php
			echo $this->Form->input('SchoolID', array('label'=>'Assigned School', 'options'=>$schoolOptions));
			echo $this->Form->input('FirstName', array('label'=>'Teacher\'s First Name'));
			echo $this->Form->input('LastName', array('label'=>'Teacher\'s Last Name'));
			echo $this->Form->input('MiddleName', array('label'=>'Teacher\'s Middle Name'));
			echo $this->Form->input('Gender', array('label'=>'Gender', 'options'=>$genderOptions));
			echo $this->Form->input('dob',array('label'=>'Teacher\'s Date Of Birth', 'minYear'=>date('Y')-100, 'maxYear'=>date('Y')-21));
			echo $this->Form->input('Details',array('type'=>'textarea','label'=>'Teacher Resume (Cut and Paste)'));
			//Teacher Address
			echo $this->Form->input('MyTeacherProfileAddress.AddressLine1', array('label'=>'Teacher\'s Address Line 1','div'=>'required'));
			echo $this->Form->input('MyTeacherProfileAddress.AddressLine2',array('label'=>'Teacher\'s Address Line 2'));
			echo $this->Form->input('MyTeacherProfileAddress.City',array('label'=>'Teacher\'s Address City','div'=>'required'));
			echo $this->Form->input('MyTeacherProfileAddress.Country', array('label'=>'Teacher\'s Address Country','div'=>'required'));
			echo $this->Form->input('MyTeacherProfileAddress.PostalCode',array('label'=>'Teacher\'s Address Postal Code','div'=>'required'));
			echo $this->Form->input('MyTeacherProfileAddress.Details',array('type'=>'textarea','label'=>'Teacher\'s Address Notes'));
			echo $this->Form->input('MyTeacherAddress.AddressID',array('type'=>'hidden'));
			echo $this->Form->input('MyTeacherAddress.SchoolID',array('type'=>'hidden'));
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
</div>
<div id="column">
	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
	
			<li><?php echo $this->Html->link(__('View Teachers', true), array('action' => 'index'));?></li>
	
			
		</ul>
	</div>
</div>