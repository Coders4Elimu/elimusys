<div class="parentsaddresses form">
<?php echo $this->Form->create('Parentsaddress');?>
	<fieldset>
 		<legend><?php __('Edit Parentsaddress'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('ParentID');
		echo $this->Form->input('AddressID');
		echo $this->Form->input('StartDate');
		echo $this->Form->input('EnDate');
		echo $this->Form->input('Details');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Parentsaddress.ID')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Parentsaddress.ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Parentsaddresses', true), array('action' => 'index'));?></li>
	</ul>
</div>