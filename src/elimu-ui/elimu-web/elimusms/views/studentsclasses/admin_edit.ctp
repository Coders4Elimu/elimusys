<div class="studentsclasses form">
<?php echo $this->Form->create('Studentsclass');?>
	<fieldset>
 		<legend><?php __('Admin Edit Studentsclass'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('ClassID');
		echo $this->Form->input('StudentID');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EndDate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Studentsclass.ID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Studentsclass.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Studentsclasses', true), array('action' => 'index'));?></li>
	</ul>
</div>