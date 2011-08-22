<div class="subjects form">
<?php echo $this->Form->create('Subject');?>
	<fieldset>
 		<legend><?php __('Admin Add Subject'); ?></legend>
	<?php
		echo $this->Form->input('Name');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subjects', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject Courses', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>