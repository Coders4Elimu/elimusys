<div class="addresses form">
<?php echo $this->Form->create('Address');?>
	<fieldset>
 		<legend><?php __('Edit Address'); ?></legend>
	<?php
		echo $this->Form->input('AddressID');
		echo $this->Form->input('AddressLine1');
		echo $this->Form->input('AddressLine2');
		echo $this->Form->input('City');
		echo $this->Form->input('Country');
		echo $this->Form->input('PostalCode');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Address.AddressID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Address.AddressID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('action' => 'index'));?></li>
	</ul>
</div>