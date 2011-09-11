<div class="courses form">
<?php echo $this->Form->create('Course');?>
	<fieldset>
 		<legend><?php __('Add Course'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Courses', true), array('action' => 'index'));?></li>
	</ul>
</div>