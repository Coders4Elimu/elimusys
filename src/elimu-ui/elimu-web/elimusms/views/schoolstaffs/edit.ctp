<div class="schoolstaffs form">
<?php echo $this->Form->create('Schoolstaff');?>
	<fieldset>
 		<legend><?php __('Edit Schoolstaff'); ?></legend>
	<?php
		echo $this->Form->input('SchoolStaffID');
		echo $this->Form->input('SchoolID');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('LastName');
		echo $this->Form->input('MiddleName');
		echo $this->Form->input('Role');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Schoolstaff.SchoolStaffID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Schoolstaff.SchoolStaffID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schoolstaffs', true), array('action' => 'index'));?></li>
	</ul>
</div>