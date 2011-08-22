<div class="teachers form">
<?php echo $this->Form->create('Teacher');?>
	<fieldset>
 		<legend><?php __('Edit Teacher'); ?></legend>
	<?php
		echo $this->Form->input('TeacherID');
		echo $this->Form->input('SchoolID');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('LastName');
		echo $this->Form->input('MiddleName');
		echo $this->Form->input('Phone');
		echo $this->Form->input('dob');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Teacher.TeacherID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Teacher.TeacherID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('action' => 'index'));?></li>
	</ul>
</div>