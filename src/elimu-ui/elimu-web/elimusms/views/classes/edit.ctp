<div class="classes form">
<?php echo $this->Form->create('Class');?>
	<fieldset>
 		<legend><?php __('Edit Class'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Class.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Class.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Classes', true), array('action' => 'index'));?></li>
	</ul>
</div>