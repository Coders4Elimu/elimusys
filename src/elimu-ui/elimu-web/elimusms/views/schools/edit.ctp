<?php 
	#Enter the breadcrumbs path 
	$this->Html->addCrumb(__('View Schools', true), '/schools');
?>
<div id="content">
	<div class="schools form">
		<h2>Edit School Information</h2>
		<?php echo $this->Form->create('School');?>
			<fieldset>
		 		<legend><?php __('Edit School Information'); ?></legend>
			<?php
				echo $this->Form->input('LanguageID', array('type'=>'select', 'options'=>array('0'=>'English', '1'=>'Francais'),'label'=>'Primary Language'));
				echo $this->Form->input('Name',array('label'=>'School Name'));
				echo $this->Form->input('Phone',array('label'=>'Phone Number'));
				echo $this->Form->input('Fax',array('label'=>'Fax'));
				echo $this->Form->input('WebSite', array('label'=>'Website'));
				echo $this->Form->input('Email', array('label'=>'Email'));
				echo $this->Form->input('DateFounded',array('label'=>'Date Founded'));
				echo $this->Form->input('Details', array('type'=>'textarea','label'=>'Mission Statement'));
				//School Address
				echo $this->Form->input('Schoolsaddress.Address.AddressLine1', array('label'=>'Address Line 1'));
				echo $this->Form->input('OfficialSchoolAddress.OwnerSchoolAddress.AddressLine2',array('label'=>'Address Line 2'));
				echo $this->Form->input('OfficialSchoolAddress.OwnerSchoolAddress.City',array('label'=>'City'));
				echo $this->Form->input('OfficialSchoolAddress.OwnerSchoolAddress.Country', array('label'=>'Country'));
				echo $this->Form->input('OfficialSchoolAddress.OwnerSchoolAddress.PostalCode',array('label'=>'Postal Code'));
				echo $this->Form->input('OfficialSchoolAddress.OwnerSchoolAddress.Details',array('type'=>'textarea','label'=>'Address Notes'));
				
			?>
			</fieldset>
		<?php echo $this->Form->end(__('Submit', true));?>
	</div>
</div>
<div id="column">
	<div class="subnav">
		<h3><?php __('Actions'); ?></h3>
		<ul>
	
			<li><?php echo $this->Html->link(__('List Schools', true), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('Show School Address', true), array('controller' => 'schoolsaddresses', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Add School Address', true), array('controller' => 'schoolsaddresses', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List School Staff', true), array('controller' => 'schoolstaffs', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Add School Staff', true), array('controller' => 'schoolstaffs', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('Add a Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>