<div class="parentsaddresses form">
<?php echo $this->Form->create('Parentsaddress');?>
	<fieldset>
 		<legend><?php __('Add Parentsaddress'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Parentsaddresses', true), array('action' => 'index'));?></li>
	</ul>
</div>