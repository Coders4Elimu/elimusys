<div class="schoolsaddresses form">
<?php echo $this->Form->create('Schoolsaddress');?>
	<fieldset>
 		<legend><?php __('Edit Schoolsaddress'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('AddressID');
		echo $this->Form->input('SchoolID');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EndDate');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Schoolsaddress.ID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Schoolsaddress.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schoolsaddresses', true), array('action' => 'index'));?></li>
	</ul>
</div>