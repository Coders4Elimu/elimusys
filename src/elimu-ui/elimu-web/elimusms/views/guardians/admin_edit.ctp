<div class="guardians form">
<?php echo $this->Form->create('Guardian');?>
	<fieldset>
 		<legend><?php __('Admin Edit Guardian'); ?></legend>
	<?php
		echo $this->Form->input('ParentID');
		echo $this->Form->input('FirstName');
		echo $this->Form->input('LastName');
		echo $this->Form->input('MiddleName');
		echo $this->Form->input('Gender');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Guardian.ParentID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Guardian.ParentID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guardians', true), array('action' => 'index'));?></li>
	</ul>
</div>