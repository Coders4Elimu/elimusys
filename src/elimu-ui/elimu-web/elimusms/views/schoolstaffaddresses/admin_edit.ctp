<div class="schoolstaffaddresses form">
<?php echo $this->Form->create('Schoolstaffaddress');?>
	<fieldset>
 		<legend><?php __('Admin Edit Schoolstaffaddress'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('AddressID');
		echo $this->Form->input('SchoolStaffID');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Schoolstaffaddress.ID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Schoolstaffaddress.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schoolstaffaddresses', true), array('action' => 'index'));?></li>
	</ul>
</div>