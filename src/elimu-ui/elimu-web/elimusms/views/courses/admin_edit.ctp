<div class="courses form">
<?php echo $this->Form->create('Course');?>
	<fieldset>
 		<legend><?php __('Admin Edit Course'); ?></legend>
	<?php
		echo $this->Form->input('ClassID');
		echo $this->Form->input('TeacherID');
		echo $this->Form->input('SubjectID');
		echo $this->Form->input('Name');
		echo $this->Form->input('Code');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Course.ClassID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Course.ClassID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('action' => 'index'));?></li>
	</ul>
</div>