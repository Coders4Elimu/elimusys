<div class="schoolsaddresses form">
<?php echo $this->Form->create('Schoolsaddress');?>
	<fieldset>
 		<legend><?php __('Add Schoolsaddress'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Schoolsaddresses', true), array('action' => 'index'));?></li>
	</ul>
</div>