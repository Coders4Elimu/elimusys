<div class="studentsclasses form">
<?php echo $this->Form->create('Studentsclass');?>
	<fieldset>
 		<legend><?php __('Add Studentsclass'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Studentsclasses', true), array('action' => 'index'));?></li>
	</ul>
</div>