<div class="students form">
<?php echo $this->Form->create('Student');?>
	<fieldset>
 		<legend><?php __('Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('StudentID');
		echo $this->Form->input('SchoolID');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('LastName');
		echo $this->Form->input('MiddleName');
		echo $this->Form->input('Gender');
		echo $this->Form->input('dob');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Student.StudentID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Student.StudentID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students', true), array('action' => 'index'));?></li>
	</ul>
</div>